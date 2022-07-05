const WEEK = ["日", "月", "火", "水", "木", "金", "土"];
const TODAY = new Date();

var showDate = new Date(TODAY.getFullYear(), TODAY.getMonth(), 1);

// initial process
window.onload = function () {
    showProcess(TODAY, calendar);
};

// show previous month
function prev(){
    showDate.setMonth(showDate.getMonth() - 1);
    showProcess(showDate);
}

// show next month
function next(){
    showDate.setMonth(showDate.getMonth() + 1);
    showProcess(showDate);
}

// set the calendar
function showProcess(date) {
    const YEAR = date.getFullYear();
    const MONTH = date.getMonth();
    document.querySelector('#header').innerHTML = YEAR + "年 " + (MONTH + 1) + "月";

    const CALENDAR = createProcess(YEAR, MONTH);
    document.querySelector('#calendar').innerHTML = CALENDAR;
}

// create a calendar
function createProcess(year, month) {
    // day of the week
    let calendar = "<table><tr class='dayOfWeek'>";
    for (var i = 0; i < WEEK.length; i++) {
        calendar += "<th>" + WEEK[i] + "</th>";
    }
    calendar += "</tr>";

    let count = 0;
    let startDayOfWeek = new Date(year, month, 1).getDay();
    let endDate = new Date(year, month + 1, 0).getDate();
    let lastMonthEndDate = new Date(year, month, 0).getDate();
    let row = Math.ceil((startDayOfWeek + endDate) / WEEK.length);

    // setting row
    for (let i = 0; i < row; i++) {
        calendar += "<tr>";
        // setting column
        for (let j = 0; j < WEEK.length; j++) {
            if (i == 0 && j < startDayOfWeek) {
                // setting previous month
                calendar += "<td class='disabled'>" + (lastMonthEndDate - startDayOfWeek + j + 1) + "</td>";
            } else if (count >= endDate) {
                // setting next month
                count++;
                calendar += "<td class='disabled'>" + (count - endDate) + "</td>";
            } else {
                // setting current month
                count++;

                if(year  == TODAY.getFullYear()
                && month == (TODAY.getMonth())
                && count == TODAY.getDate()) 
                { calendar += "<td class='today'>" + count + "</td>"; } 

                else 
                { calendar += "<td>" + count + "</td>"; }
            }
        }
        calendar += "</tr>";
    }
    return calendar;
}