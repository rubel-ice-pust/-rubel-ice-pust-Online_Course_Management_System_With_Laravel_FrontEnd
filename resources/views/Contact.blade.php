

@extends('Layout.app')

@section('title','Contact')
    



@section('content')


<div class="container-fluid jumbotron mt-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">


            <h1 class="page-top-title mt-3">-যোগাযোগ করুন-</h1>
        
        </div>
    </div>
</div>




<div class="container-fluid bg-white jumbotron mt-5 ">
    <div class="row">
        <div class="col-md-6">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.504736462394!2d89.27621661425985!3d24.01326008460226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe84f0ec23a72b%3A0x775d6cd53cbdad8b!2sPabna%20University%20of%20Science%20%26%20Technology!5e0!3m2!1sen!2sbd!4v1628241357771!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 

        </div>

        <div class="col-md-6">
            <h3 class="service-card-title">ঠিকানা</h3>
            <hr>
            <p class="footer-text"><i class="fas fa-map-marker-alt"></i>পাবনা বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়,পাবনা। <i class="fas ml-2 fa-phone"></i> ০১৭০৩৪৮৩৮৯৬ <i class="fas ml-2 fa-envelope"></i> rubel.pust06@gmail.com</p>
            
            <div class="form-group ">
                <input id="contactNameId" type="text" class="form-control w-100" placeholder="আপনার নাম">
            </div>
            <div class="form-group">
                <input id="contactMobileId" type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
            </div>
            <div class="form-group">
                <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="ইমেইল ">
            </div>
            <div class="form-group">
                <input id="contactMsgId" type="text" class="form-control  w-100" placeholder="মেসেজ ">
            </div>
            <button id="contactSendBtnId" class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>
    </div>
        </div>
    </div>
</div>

@endsection



