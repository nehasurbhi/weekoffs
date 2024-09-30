<template>
    <div class="p-6 bg-gray-50 rounded-lg shadow-lg max-w-7xl mx-auto">
      <!-- Title and Top Checkbox -->
      <div class="mb-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Add Work Calendar</h2>
        <label class="flex items-center space-x-2">
          <input
            type="checkbox"
            v-model="halfWorkingWeekend"
            @change="toggleDropdowns"
            class="form-checkbox h-4 w-4 text-blue-600"
          />
          <span class="text-gray-700">Half working day & half weekend</span>
        </label>
      </div>
  
      <!-- Calendar Table -->
      <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto text-center">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-4 py-3 text-sm text-gray-700">Day</th>
              <th class="px-4 py-3 text-sm text-gray-700">All</th>
              <th v-for="week in weeks" :key="week" class="px-4 py-3 text-sm text-gray-700">
                {{ week }}th
              </th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="(day, index) in daysOfWeek"
              :key="index"
              class="hover:bg-gray-50 border-b last:border-none"
            >
              <!-- Day of the Week -->
              <td class="px-4 py-3 text-sm font-medium text-gray-700">{{ day.name }}</td>
  
              <!-- 'All' Checkbox for the Entire Row -->
              <td class="px-4 py-3">
                <input
                  type="checkbox"
                  v-model="day.allChecked"
                  @change="toggleAll(day)"
                  class="form-checkbox h-4 w-4 text-blue-600"
                />
              </td>
  
              <!-- Checkbox and Dropdown for each week -->
              <td v-for="(week, weekIndex) in weeks" :key="weekIndex" class="px-4 py-3">
                <div class="flex items-center space-x-2 justify-center">
                  <input
                    type="checkbox"
                    v-model="day.weeks[weekIndex].checked"
                    @change="updateAllStatus(day)"
                    class="form-checkbox h-4 w-4 text-blue-600"
                  />
                  <div v-if="halfWorkingWeekend" class="ml-2">
                    <select
                      v-model="day.weeks[weekIndex].dayType"
                      class="dropdown-box"
                    >
                      <option value="full">Full Day</option>
                      <option value="first-half">1st Half</option>
                      <option value="second-half">2nd Half</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  
      <!-- Save and Cancel Buttons -->
      <div class="flex justify-end mt-6 space-x-4">
        <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 shadow text-sm">
          Save
        </button>
        <button class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 shadow text-sm">
          Cancel
        </button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        halfWorkingWeekend: false,
        weeks: [1, 2, 3, 4, 5], // Representing the 1st, 2nd, 3rd, 4th, and 5th weeks
        daysOfWeek: [
          { name: "Sunday", allChecked: false, weeks: this.generateWeeks() },
          { name: "Monday", allChecked: false, weeks: this.generateWeeks() },
          { name: "Tuesday", allChecked: false, weeks: this.generateWeeks() },
          { name: "Wednesday", allChecked: false, weeks: this.generateWeeks() },
          { name: "Thursday", allChecked: false, weeks: this.generateWeeks() },
          { name: "Friday", allChecked: false, weeks: this.generateWeeks() },
          { name: "Saturday", allChecked: false, weeks: this.generateWeeks() }
        ]
      };
    },
    methods: {
      generateWeeks() {
        // Generate an array for each week's checkbox and dropdown state
        return Array.from({ length: 5 }, () => ({
          checked: false,
          dayType: "full"
        }));
      },
      toggleDropdowns() {
        // When toggling the half working day/weekend, reset dayType to full if unchecked
        if (!this.halfWorkingWeekend) {
          this.daysOfWeek.forEach(day => {
            day.weeks.forEach(week => {
              week.dayType = "full";
            });
          });
        }
      },
      toggleAll(day) {
        // Toggle all checkboxes for the week if "All" checkbox is checked or unchecked
        day.weeks.forEach(week => {
          week.checked = day.allChecked;
        });
      },
      updateAllStatus(day) {
        // If any week is unchecked, "All" checkbox should be unchecked
        const allWeeksChecked = day.weeks.every(week => week.checked);
        day.allChecked = allWeeksChecked;
      }
    }
  };
  </script>
  
  <style scoped>
  table {
    width: 100%;
  }
  
  td,
  th {
    padding: 12px 16px; /* Adjust padding for cells */
  }
  
  td input[type="checkbox"] {
    margin-right: 8px;
  }
  
  .dropdown-box {
    appearance: none;
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 0.5rem 1.5rem; /* Adjusted padding */
    border-radius: 0.375rem;
    background-position: right 0.75rem center;
    background-repeat: no-repeat;
    background-size: 1rem;
    font-size: 0.875rem;
    color: #4a5568;
    cursor: pointer;
    outline: none;
    transition: border-color 0.2s ease-in-out;
  }
  
  .dropdown-box:focus {
    border-color: #3182ce;
  }
  
  .dropdown-box::-ms-expand {
    display: none;
  }
  
  /* Table without borders */
  table th,
  table td {
    border: none;
  }
  
  .dropdown-box option {
    padding: 0.5rem;
  }
  </style>
  