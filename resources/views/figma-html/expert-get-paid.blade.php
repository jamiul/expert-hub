@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}"> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">


    <main class="expert__dashboad diary__page get__paid py-5"
        style="
        --done-icon: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9ImRvbmVfRklMTDBfd2dodDMwMF9HUkFEMF9vcHN6MjQgMSI+CjxwYXRoIGlkPSJWZWN0b3IiIGQ9Ik03Ljk1OTQ2IDEyLjkyOTVMMTUuMTU4MiA1LjczMDc3QzE1LjI4MjEgNS42MDY4NCAxNS40MjkzIDUuNTQzNTMgMTUuNTk5NyA1LjU0MDg1QzE1Ljc3MDEgNS41MzgxOSAxNS45MTk5IDUuNjAxNDkgMTYuMDQ5MiA1LjczMDc3QzE2LjE3ODUgNS44NjAwMyAxNi4yNDMxIDYuMDA4NTMgMTYuMjQzMSA2LjE3NjI3QzE2LjI0MzEgNi4zNDM5OSAxNi4xNzg1IDYuNDkyNDkgMTYuMDQ5MiA2LjYyMTc3TDguNDg2NjkgMTQuMTg0MkM4LjMzNjA1IDE0LjMzNDkgOC4xNjAzMSAxNC40MTAyIDcuOTU5NDYgMTQuNDEwMkM3Ljc1ODYxIDE0LjQxMDIgNy41ODI4NyAxNC4zMzQ5IDcuNDMyMjMgMTQuMTg0MkwzLjk1MzA2IDEwLjcwNTFDMy44MjkxMyAxMC41ODEyIDMuNzY3OTYgMTAuNDM0IDMuNzY5NTYgMTAuMjYzNkMzLjc3MTE3IDEwLjA5MzIgMy44MzY2MSA5Ljk0MzM3IDMuOTY1ODcgOS44MTQxQzQuMDk1MTUgOS42ODQ4MiA0LjI0MzY1IDkuNjIwMTkgNC40MTEzNyA5LjYyMDE5QzQuNTc5MTEgOS42MjAxOSA0LjcyNzYxIDkuNjg0ODIgNC44NTY4NyA5LjgxNDFMNy45NTk0NiAxMi45Mjk1WiIgZmlsbD0iIzAwMzZFMyIvPgo8L2c+Cjwvc3ZnPgo=);
        --radio-checked: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiByeD0iMTAiIGZpbGw9IiMwMDM2RTMiLz4KPHJlY3QgeD0iMiIgeT0iMiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2IiByeD0iOCIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLW9wYWNpdHk9IjAuODIiIHN0cm9rZS13aWR0aD0iNCIvPgo8L3N2Zz4K);
        "
    >
        <div class="container">
            <div class="main__content__wrapp py-50">
                <div class="px-40">

                    <h1 class="lead-lg fw-medium text-black mb-3">Get Paid</h1>
                    
                    <div class="mt-4 p-3 p-sm-4 border rounded-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="col-8">
                                <p class="mb-0 lead fw-medium text-black">Available balance</p>
                                <p class="mb-0 title text-primary fw-medium">$2000</p>
                            </div>
                            <div class="col-4 text-end">
                                <button class="btn btn-primary fs-15 fw-medium large__btn" data-bs-toggle="modal" data-bs-target="#modalGetPaid">Get Paid Now</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 p-3 p-sm-4 border rounded-4">
                        <p class="mb-2 lead fw-medium text-black d-flex align-items-center">
                            <span> Withdrawal schedule</span>
                            <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center ms-1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29683 15.8333H5.32727L13.0437 8.11692L12.0132 7.08647L4.29683 14.8029V15.8333ZM15.7167 7.21309L12.9042 4.42628L13.9908 3.33976C14.2354 3.0951 14.533 2.97278 14.8834 2.97278C15.2338 2.97278 15.5313 3.0951 15.776 3.33976L16.7904 4.35415C17.035 4.59881 17.1616 4.89207 17.1702 5.23395C17.1787 5.57582 17.0607 5.86908 16.816 6.11374L15.7167 7.21309ZM14.8129 8.12974L5.85931 17.0833H3.04688V14.2708L12.0004 5.31728L14.8129 8.12974ZM12.5244 7.59769L12.0132 7.08647L13.0437 8.11692L12.5244 7.59769Z" fill="#0036E3"/>
                                  </svg>
                            </button>
                        </p>
                        <p class="text-black mb-3">
                            Weekly (next on Oct 18) <br>
                            Only when balance is $1,000.00 or more. <a href="#" class="text-black text-decoration-underline fw-medium">View payment calendar</a>
                        </p>
                        <p class="text-black mb-0" >Direct to Local Bank (BDT) - Account ending in 1001</p>
                    </div>
                    
                    <div class="mt-4 p-3 p-sm-4 border rounded-4">
                        <p class="mb-2 lead fw-medium text-black">
                            Last withdrawal 
                        </p>
                        <p class="text-black mb-3">
                            $119.51 to Direct to Local Bank (BDT) - Account ending in 5343 <br>
                            <span class="small">Oct 14, 2023</span>
                        </p>
                        <a href="#" class="text-primary fw-medium text-decoration-underline mb-0" >View Transection history</a>
                    </div>
                    
                </div>
            </div><!--.//main__content-->



            <!-- Modal -->
            <div class="modal fade setting__modal" id="modalGetPaid" tabindex="-1" role="dialog" aria-labelledby="modalGetPaid" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width: 800px;">
                    <div class="modal-content">
                        <div class="modal-body position-relative">
                            <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>

                            <p class="title text-dark fw-medium mb-2">Get Paid Now</p>
                            <p class="mb-0 fw-medium text-black">Available balance <span class="text-primary">$2000</span></p>
                         
                            <form action="#" name="withdrawalForm" class="mt-4">
                                <div class="mb-4"> 
                                    <label for="withdrawal__method" class="text-black small fw-medium">Withdrawal Method</label> 
                                    <div class="custom-selec">
                                        <select name="withdrawal__method" id="withdrawal__method" class="form-select">
                                            <option value="Select withdrawal method" selected disabled>Select withdrawal method</option>
                                            <option value="PayPal">PayPal</option>
                                            <option value="EXIM Bank Bangladesh">EXIM Bank Bangladesh</option>
                                            <option value="Islami Bank Limited Bangladesh">Islami Bank Limited Bangladesh</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 d-none" id="paypalWithdrawMethodInfo"> 
                                    <label for="amount" class="text-black small fw-medium mb-2">Amount</label> 
                                    <div class="">
                                        <div class="form-check mb-1">
                                            <input type="radio" name="amount" id="main_amount" class="form-check-input" value="$2087" checked>
                                            <label for="main_amount" class="form-check-label text-dark fs-15">$2087</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="amount" id="other_amount" class="form-check-input" value="other" checked>
                                            <label for="other_amount" class="form-check-label text-dark fs-15">Other amount</label>
                                        </div>
                                    </div>

                                    <!-- Other withdraw values -->
                                    <div class="d-none align-items-center mt-3" id="otherWithdrawAmount">
                                        <label for="" class="px-3 text-black">AUD</label> 
                                        <div class="input-group">
                                            <span class="input-group-text border-end-0 bg-white" style="border-width: 2px;border-color: #E7E5EF;">$</span>
                                            <input type="text" class="form-control border-start-0" aria-label="Amount (to the nearest dollar)"> 
                                        </div> 
                                    </div>

                                    <div class="border-top pt-3 my-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="text-black">
                                                <span>Withdraw fee (Per payment)</span>
                                                <button class="btn p-0 border-0 rounded-circle" type="button">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.33203 11.3334H8.66536V7.33337H7.33203V11.3334ZM7.9987 6.00004C8.18759 6.00004 8.34592 5.93615 8.4737 5.80837C8.60148 5.6806 8.66536 5.52226 8.66536 5.33337C8.66536 5.14449 8.60148 4.98615 8.4737 4.85837C8.34592 4.7306 8.18759 4.66671 7.9987 4.66671C7.80981 4.66671 7.65148 4.7306 7.5237 4.85837C7.39592 4.98615 7.33203 5.14449 7.33203 5.33337C7.33203 5.52226 7.39592 5.6806 7.5237 5.80837C7.65148 5.93615 7.80981 6.00004 7.9987 6.00004ZM7.9987 14.6667C7.07648 14.6667 6.20981 14.4917 5.3987 14.1417C4.58759 13.7917 3.88203 13.3167 3.28203 12.7167C2.68203 12.1167 2.20703 11.4112 1.85703 10.6C1.50703 9.78893 1.33203 8.92226 1.33203 8.00004C1.33203 7.07782 1.50703 6.21115 1.85703 5.40004C2.20703 4.58893 2.68203 3.88337 3.28203 3.28337C3.88203 2.68337 4.58759 2.20837 5.3987 1.85837C6.20981 1.50837 7.07648 1.33337 7.9987 1.33337C8.92092 1.33337 9.78759 1.50837 10.5987 1.85837C11.4098 2.20837 12.1154 2.68337 12.7154 3.28337C13.3154 3.88337 13.7904 4.58893 14.1404 5.40004C14.4904 6.21115 14.6654 7.07782 14.6654 8.00004C14.6654 8.92226 14.4904 9.78893 14.1404 10.6C13.7904 11.4112 13.3154 12.1167 12.7154 12.7167C12.1154 13.3167 11.4098 13.7917 10.5987 14.1417C9.78759 14.4917 8.92092 14.6667 7.9987 14.6667Z" fill="#303744" fill-opacity="0.5"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="text-black">- $1.00</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-black fw-medium">
                                                <span>Total Amount</span> 
                                            </div>
                                            <div class="text-black lead fw-medium">$2086</div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                            
                            <div class="mt-4 pt-3 border-top text-end">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-outline-primary fw-medium px-4 me-2">Cancel</button>
                                <button class="btn btn-primary fw-medium px-4">Get Paid</button>
                            </div>
                        </div><!--.//modal-body-->
                    </div>
                </div>
            </div>





        </div><!--.//container-->
    </main>



@endsection

@push('js')

<script>
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
            c.addEventListener("click", function(e) {
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
                    y = this.parentNode.getElementsByClassName("same-as-selected");
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
          a.addEventListener("click", function(e) {
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
          var x, y, i, xl, yl, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          xl = x.length;
          yl = y.length;
          for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
              arrNo.push(i)
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
    </script>
<script>

    // open papal withdraw details
    var method = document.querySelector("#withdrawal__method");
    method.addEventListener('change', function(){
        // console.log(method.value);
        if (method.value === 'PayPal') { 
            document.querySelector("#paypalWithdrawMethodInfo").classList.remove('d-none');
        } else {
            document.querySelector("#paypalWithdrawMethodInfo").classList.add('d-none');

        }
    })

    // opend other amount inputs
    var amountType = document.withdrawalForm.amount;
    var prev = null;
    for (var i = 0; i < amountType.length; i++) {
        amountType[i].addEventListener('change', function() {
            (prev) ? console.log(prev.value): null;
            if (this !== prev) {
                prev = this;
            }
            // console.log(this.value)
            var box = document.querySelector("#otherWithdrawAmount");
            if (this.value === 'other') {
                box.classList.remove('d-none')
                box.classList.add('d-flex')
            } else { 
                box.classList.add('d-none')
                box.classList.remove('d-flex')

            }
        });
    }
</script>
@endpush