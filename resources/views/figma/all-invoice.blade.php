@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')


<style>

.edux-ref-content-area {
  display: flex;
  flex-direction: column;
  width: 100%;
  border-bottom: 1px solid #E7E5EF;
  padding: 12px 50px;
}
.invoice-header {
  border-bottom: 1px solid rgba(14, 0, 98, 0.10);
  margin-bottom: 30px;
  /* padding-bottom: 30px; */
  padding: 0px 50px 30px;
}
.edux-modal-dialog-invoice {
    /* max-width: 1665px; */
    margin: 0 auto;
    width: 100%;
}

.edux-form-invoice{
  display:flex;
  justify-content: space-between;
  flex-wrap: wrap;

}
.dingle-ref-item-invoice {
  display: flex;
  /* justify-content: space-between; */
  flex-direction: column;
  width: 50%;
  /* gap: 12px; */
}

.dingle-ref-item-invoice-price{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    width: 50%;
    border-radius: 8px;
    border: 1px solid rgba(14, 0, 98, 0.10);
    background: #FFF;
    padding: 24px;
}

.dingle-ref-item-invoice-price p {
  display: flex;
  justify-content: space-between;
}
.invoice-description {
  border: 1px solid #E7E5EF;
  display: flex;
  flex-direction: column;
  border-radius: 4px;
  margin-bottom:16px;
}

.dingle-ref-item-total-price {
  display: flex !important;
  justify-content: flex-end;
  gap: 155px;
  display: flex;
  padding: 14px 10px 14px 10px;
  border: 1px solid #ddd;
  max-width: 350px;
  width: 100%;
  float: right;
  text-align: right;
}

.dingle-ref-content-total {
  display: flex;
  justify-content: space-between;
  border-radius: 4px 4px 0px 0px;
  background: #F1F3FA;
  flex: 1 0 0;
  color: #6E737C;
  font-family: Colfax;
  font-size: 14px;
  font-style: normal;
  font-weight: 500;
  line-height: 137%;
  padding: 16px;
  border-bottom: 1px solid #E7E5EF;
}


@media only screen and (max-width: 768px) {

.edux-form-invoice {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  flex-direction: column;
  width: 100%;
}

.dingle-ref-item-invoice {
display: flex;
/* justify-content: space-between; */
flex-direction: column;
width: 100%;
/* gap: 12px; */
margin-bottom:30px;
}

.dingle-ref-item-invoice-price {
display: flex;
justify-content: space-between;
flex-direction: column;
width: 100%;
border-radius: 8px;
border: 1px solid rgba(14, 0, 98, 0.10);
background: #FFF;
padding: 24px;
}


}

</style>



<div class="edux-modal-dialog-invoice my-5">
      <div class="invoice-header">
              <a href="#"> <img src="{{ asset('/assets/frontend/img/invoice-logo.png') }}"/>  </a>
            </div>
            <div class="edux-ref-content-area border-0">
                  <div class="edux-form-invoice">
                    <div class="dingle-ref-item-invoice">
                    <span class="ref-id fw-medium mb-2">From</span>
                      <span class="ref-id">Expert Gate </span>
                      <span class="ref-id">32 Erie Street, South Granville </span>
                      <span class="ref-id">NSW 2142, Australia</span>

                      <span class="ref-id fw-medium my-2">To</span>
                      <span class="ref-id">Expert Gate </span>
                      <span class="ref-id">32 Erie Street, South Granville </span>
                      <span class="ref-id">NSW 2142, Australia</span>
                    </div>
                    <div class="dingle-ref-item-invoice-price">
                    <span class="ref-id fw-medium mb-4">Invoice</span>
                      <p><span class="ref-id">Invoice #</span> <span class="fw-bold">545678907</span></p>
                      <p><span class="ref-id">Date</span> <span>Oct 23, 2023</span></p>
                      <p><span class="ref-id">Due Date</span> <span>Oct 23, 2023</span></p>
                      <p><span class="ref-id">Total Amount</span> <span class="fw-bold">$100.50</span></p>
                      <p><span class="ref-id">Total Due</span> <span>$7.34</span></p>
                    </div>
                  </div>

              </div>

              <div class="edux-ref-content-area border-0">
                  <div class="invoice-description">
                    <div class="dingle-ref-content-total">
                      <span class="ref-id fw-medium">Description</span>
                      <span class="ref-id fw-medium">Amount / Balance</span>
                    </div>
                    <div class="dingle-ref-item-price">
                        <span class="ref-id">Funding request for Developing Curriculum for Postgraduate Public Health Unit</span>
                        <span class="ref-id fw-medium">$117.34</span>
                    </div>
                  </div>
                  <div class="dingle-ref-item-price-all">
                    <div class="dingle-ref-item-total-price">
                        <span class="ref-id">Total Amount</span>
                        <span class="ref-id fw-medium">$117.34</span>
                    </div>
                  </div>
              </div>
        </div>



@endsection
