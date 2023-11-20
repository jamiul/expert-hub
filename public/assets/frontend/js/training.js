// owl-carousel
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        },
    },
});
$(document).ready(function () {
    $(document).on("click", ".reset-filter", function (e) {
        $('.left-sidebar #dateInput, .left-sidebar .dateInput').val('');
        $('.left-sidebar #locationInput').val('');
        $('.left-sidebar #filterLanguageWrap .select-selected').text('');
    });
    // $(".at-title").click(function () {
    //     $(this)
    //         .toggleClass("active")
    //         .next(".at-tab")
    //         .slideToggle()
    //         .parent()
    //         .siblings()
    //         .find(".at-tab")
    //         .slideUp()
    //         .prev()
    //         .removeClass("active");
    // });

    $(".carousel-inner .thumb").click(function () {
        if (!$(this).hasClass("active")) {
            $(".carousel-inner .thumb").removeClass("active");
            $(this).addClass("active");
        }
    });

    $(document).on('click', '.read-more-text', function() {
        $(this).closest('.right-database').find('.text-truncate-3').css('display', 'block');
        $(this).hide();
    });

    $('[data-toggle="tooltip"]').tooltip({
        trigger: "click",
    });

    // Copy current page
    $(document).on("click", ".btnShareCurrentPage", function (e) {
        var url = window.location.href;
        $('#shareModel .facebook').attr('href', `https://www.facebook.com/sharer/sharer.php?u=${url}`);
        $('#shareModel .twitter').attr('href', `https://twitter.com/intent/tweet?&url=${url}`);
        $('#shareModel .linkedin').attr('href', `https://linkedin.com/shareArticle?url=${url}`);
    });

    // Copy detail page
    $(document).on("click", ".btnShareDetailTraining", function (e) {
        var url = $(this).closest('.right-sidebar').find('.trainingDetailUrl').val();
        $('#shareModel .facebook').attr('href', `https://www.facebook.com/sharer/sharer.php?u=${url}`);
        $('#shareModel .twitter').attr('href', `https://twitter.com/intent/tweet?&url=${url}`);
        $('#shareModel .linkedin').attr('href', `https://linkedin.com/shareArticle?url=${url}`);
    });
});

// Calendar funtionality
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const monthYear = document.getElementById("monthYear");
const dateInput = document.getElementById("dateInput");
const calendar = document.getElementById("calendar");

const currentDate = new Date();
let selectedDate = null;

function handleDayClick(_this) {
    let calendar_box = $(_this).closest('.calendar-box');
    let currentDate = calendar_box.find('.dateInput').attr('current_date');
    currentDate = new Date(currentDate);

    let day = _this.innerText;
    selectedDate = new Date(
        currentDate.getFullYear(),
        currentDate.getMonth(),
        day
    );
    let dateInput = calendar_box.find('.dateInput')[0];
    let calendar = calendar_box.find('.calendar')[0];
    dateInput.value = selectedDate.toLocaleDateString("en-US");
    calendar.style.display = "none";
    renderCalendar(calendar_box);
}

let loadedDateSelect = false;
function createDayElement(day, daysContainer, currentDate, _this) {
    const date = new Date(
        currentDate.getFullYear(),
        currentDate.getMonth(),
        day
    );

    var newSelectDate = null;
    if (!loadedDateSelect && $(_this).attr('id') == 'filterTrainingDateWrap') {
        newSelectDate = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth(),
            currentDate.getDate(),
        );
    } else {
        newSelectDate = selectedDate;
    }

    const dayElement = document.createElement("div");
    dayElement.classList.add("day");

    if (!newSelectDate && date.toDateString() === new Date().toDateString()) {
        dayElement.classList.add("current");
    }
    if (newSelectDate && date.toDateString() === newSelectDate.toDateString()) {
        dayElement.classList.add("selected");
        loadedDateSelect = true;
    }

    dayElement.textContent = day;
    daysContainer.appendChild(dayElement);
}

$(document).on('click', '.day', function() {
    handleDayClick(this);
});

function renderCalendar(_this) {
    let daysContainer = $(_this).find(".daysContainer")[0];
    daysContainer.innerHTML = "";

    let dateInputEl = $(_this).find('.dateInput');
    let currentInput = dateInputEl.val();
    let newDate = currentDate;

    if (currentInput && !dateInputEl.attr('current_date')) {
        currentInput = new Date(currentInput);
        newDate = currentInput;
    } else if (dateInputEl.attr('current_date')) {
        currentInput = new Date(dateInputEl.attr('current_date'));
        newDate = currentInput;
    }

    if (!dateInputEl.attr('current_date')) {
        dateInputEl.attr('current_date', newDate);
    }

    const firstDay = new Date(
        newDate.getFullYear(),
        newDate.getMonth(),
        1
    );
    const lastDay = new Date(
        newDate.getFullYear(),
        newDate.getMonth() + 1,
        0
    );

    $(_this).find('.monthYear').text(`${newDate.toLocaleString("default", {
        month: "long",
    })} ${newDate.getFullYear()}`);

    for (let day = 1; day <= lastDay.getDate(); day++) {
        createDayElement(day, daysContainer, newDate, _this);
    }
}

$(document).on('click', '.prevBtn', function() {
    newDate = $(this).closest('.calendar-box').find('.dateInput').attr('current_date');
    newDate = new Date(newDate);
    newDate.setMonth(newDate.getMonth() - 1);
    $(this).closest('.calendar-box').find('.dateInput').attr('current_date', newDate);

    renderCalendar($(this).closest('.calendar-box'));
});

$(document).on('click', '.nextBtn', function() {
    newDate = $(this).closest('.calendar-box').find('.dateInput').attr('current_date');
    newDate = new Date(newDate);
    newDate.setMonth(newDate.getMonth() + 1);
    $(this).closest('.calendar-box').find('.dateInput').attr('current_date', newDate);

    renderCalendar($(this).closest('.calendar-box'));
});


$(document).on('click', '.dateInput', function() {
    this.nextElementSibling.style.display = "block";
    positionCalendar(this, this.nextElementSibling);
});

document.addEventListener("click", (event) => {
    var calendars = document.getElementsByClassName("calendar");
    for (var i = 0; i < calendars.length; i++) {
        if (!event.target.classList.contains('dateInput') && !calendars[i].contains(event.target)) {
            calendars[i].style.display = "none";
        }
    }
});

function positionCalendar(_this, calendar) {
    const inputRect = _this.getBoundingClientRect();
    calendar.style.top = inputRect.bottom + "px";
    calendar.style.left = inputRect.left + "px";
}

window.addEventListener("resize", positionCalendar);
$(".calendar-box").each(function() {
    renderCalendar(this);
})

var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.setAttribute('data-value', selElmnt.options[j].value);
        c.addEventListener("click", function (e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y =
                        this.parentNode.getElementsByClassName(
                            "same-as-selected"
                        );
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i);
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

/*For location selector*/


function showList(inp, arr, val) {
    /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        inp.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].name.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].name.substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].name.substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' data-id='" + arr[i].id + "' value='" + arr[i].name + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                // closeAllLists();
            });
            a.appendChild(b);
          }
        }
  }
  function autocomplete(inp, arr) {
    if (!inp) {
        return;
    }
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        showList(inp, arr, val);
    });
    
    inp.addEventListener("focus", function(e) {
        closeAllLists();
        showList(inp, arr, "");
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }
  
  /*An array containing all the country names in the world:*/
  var countries = JSON.parse($('#locationInput').attr('data-list'));
  
  /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
  autocomplete(document.getElementById("locationInput"), countries);
  