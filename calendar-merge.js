function hamburgerIcon(){
  let hamburger = document.getElementById("hamburger_icon");
  let box = document.getElementById("box_1");
  
  hamburger.classList.toggle("active");
  box.classList.toggle("active");
}

//calendar js

let currentYear, currentMonth;

function generateCalendar(year, month) {
  currentYear = year;
  currentMonth = month;

  const daysInMonth = new Date(year, month + 1, 0).getDate();
  const firstDayOfMonth = new Date(year, month, 1).getDay();

  const calendarDiv = document.getElementById('calendar');
  calendarDiv.innerHTML = ''; // Clear previous content

  // Create header
  const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

  daysOfWeek.forEach(day => {
    const headerCell = document.createElement('div');
    headerCell.className = 'day-header';
    headerCell.textContent = day;
    calendarDiv.appendChild(headerCell);
  });

  // Create days
  let dayCount = 1;

  for (let i = 0; i < 6; i++) {
    for (let j = 0; j < 7; j++) {
      const dayCell = document.createElement('div');
      let daysDiv = document.createElement("div");
      let eventDiv = document.createElement("div");
      let eventId = document.createElement("div");
      let startId = document.createElement("div");
      let endId = document.createElement("div");
      let locationId = document.createElement("div");

      dayCell.className = 'day';
      eventDiv.classList.add("event-div");
      eventId.id = `event${dayCount}`;
      startId.id = `start-time${dayCount}`;
      endId.id = `end-time${dayCount}`;
      locationId.id = `location${dayCount}`;

      if (i === 0 && j < firstDayOfMonth) {
        // Empty cells before the first day of the month
        dayCell.textContent = '';
      } else if (dayCount > daysInMonth) {
        // Stop after the last day of the month
        break;
      } else {
        // Fill in the days
        dayCell.textContent = dayCount;
        dayCount++;
      }

      calendarDiv.appendChild(dayCell);
      dayCell.appendChild(eventDiv);
      // daysDiv.appendChild(eventDiv);
      eventDiv.appendChild(eventId);
      eventDiv.appendChild(startId);
      eventDiv.appendChild(endId);
      eventDiv.appendChild(locationId);

      // dayCell.addEventListener('click', () => addEvent(dayCount));
      calendarDiv.appendChild(dayCell);
    }
  }

  // Display the month and year
  const monthYearDiv = document.getElementById('monthYear');
  const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  monthYearDiv.textContent = `${monthNames[month]} ${year}`;
}

function prevMonth() {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  generateCalendar(currentYear, currentMonth);
}

function nextMonth() {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  generateCalendar(currentYear, currentMonth);
}


// Example: Generate calendar for the current month and year
const currentDate = new Date();
generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
