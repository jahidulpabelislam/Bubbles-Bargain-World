var dayBold = function () {
	var date, days, day;
    date = new Date();
    days = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
    day = days[date.getDay()];
    document.getElementById(day).style.fontWeight = "bold";
};
window.addEventListener("load", dayBold);