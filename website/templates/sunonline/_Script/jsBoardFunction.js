var clock = {
    weekDays : ["SUN","MON","TUE","WED","THU","FRI","SAT"],
    monthNames : ["JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"],
    serverDate : {}, // server date obj
    localDate : {}, // local date obj
    dateOffset: {}, // offset ammount
    nowDate : {}, // adjusted date
    dateString : {}, // formated
    el : {}, // element to update
    timeout : {}, // timeout handle
    init : function (date,id,interval) {
        this.calculateOffset(date);
        this.el = document.getElementById(id);
        this.updateClock(interval);
    },
    calculateOffset : function (serverDate) {
        this.serverDate = new Date(serverDate);
        this.localDate = new Date();
        this.dateOffset = this.serverDate - this.localDate;
    },
    updateClock : function (interval) {
        this.nowDate = new Date();
        this.nowDate.setTime(this.nowDate.getTime() + this.dateOffset);
        this.dateFormat(this.nowDate);
        this.el.innerHTML = this.dateString;
        var me = this; this.timeout = setTimeout(function(){me.updateClock(interval)},interval);
    },
    stopClock : function () {
        clearTimeout(this.timeout);
    },
    dateFormat : function (dateObj) {
        this.dateString = '<span>' + this.digit(dateObj.getHours()) + ':' + this.digit(dateObj.getMinutes()) + ':' + this.digit(dateObj.getSeconds()) + '</span>';
        this.dateString += ' ';
        this.dateString += this.monthNames[dateObj.getMonth()] + ' ';
        this.dateString += this.digit(dateObj.getDate()) + ', ';
        this.dateString += dateObj.getFullYear();
    },
    digit : function (str) {
        str = String(str);
        str = str.length == 1 ? "0" + str : str;
        return str;
    }
};

function menuLayer_open(idname) {
    document.getElementById(idname).style.display="block";
}
function menuLayer_close(idname) {
    document.getElementById(idname).style.display="none";
}
