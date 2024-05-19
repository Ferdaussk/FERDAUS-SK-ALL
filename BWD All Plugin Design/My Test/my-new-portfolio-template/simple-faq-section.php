<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" charset="utf-8"></script>
  <style media="screen">

.accordions {
width: 80%;
margin: 100px auto;
}

.accordions h3 {
text-align: center;
font-family: "Roboto", sans-serif;
font-weight: bold;
}

.accordion-item {
background-color: #0b3791;
margin-bottom: 20px;
border: 1px solid #100e34;
border-radius: 5px;
color: #ffffff;
}

.accordion-item .accordion-title {
cursor: pointer;
padding: 20px;
transition: transform 0.4s ease-in-out;
}

.accordion-item .accordion-title.active-title {
background-color: #100e34;
color: #ffffff;
}

.accordion-item .accordion-title h3 {
font-weight: 700;
margin: 0;
font-size: 18px;
display: flex;
justify-content: space-between;
font-weight: bold;
}

.accordion-item .accordion-title i.fa-chevron-down {
transform: rotate(0);
transition: 0.4s;
}

.accordion-item .accordion-title i.fa-chevron-down.chevron-top {
transform: rotate(-180deg);
color: #fa5019;
}

.accordion-item .accordion-content {
display: none;
line-height: 1.7;
padding: 20px;
background-color: #ffffff;
border-radius: 0 0 5px 5px;
color: #100e34;
}

.accordion-item .accordion-content.active {
display: block;
}

.accordion-item .accordion-content p {
margin: 0;
font-family: "Nunito Sans", sans-serif;
font-size: 16px;
}

.details {
background: #dce1f2;
}

.details .detailed_info {
margin: 50px auto;
}

.details img {
margin: 0 auto;
display: block;
/* margin-top: 120px; */
}

.details h3 {
font-family: "Poppins", sans-serif;
font-weight: bold;
font-size: 20px;
}

.details p {
font-family: "Nunito Sans", sans-serif;
font-size: 16px;
line-height: 1.5em;
}

.details ul li {
font-family: "Nunito Sans", sans-serif;
font-size: 16px;
line-height: 1.7em;
}

  </style>
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <section id="faq">
    <div class="container faq">

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="accordions">
              <div class="accordion-item">
                <div class="accordion-title" data-tab="item1">
                  <h3>Why FutureRDP? <i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item1">
                  <p>
                    FutureRDP provides cheap and affordable Linux and Windows VPS servers and
                    storage solution since 2008 for more than 11 years in multiple locations such as
                    the United States, UK, France, Germany, Netherlands, and Canada. We have a range
                    of different solutions for different purposes such as SSD VPS and Storage
                    servers. All servers are equipped with RAID10 only SSD drives and FREE DDoS
                    Protection!
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item2">
                  <h3>What is Windows VPS? <i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item2">
                  <p>
                    With a Windows VPS server, you will get a Remote Desktop connection within a few
                    
                    or any software like Docking, Forex trading, Crypto Trading etc… or anything
                    which you wish for. Just like your own computer!! but the difference is online
                    24/7 days without interruptions and with a super fast Internet connection!
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item3">
                  <h3>Payment Options <i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item3">
                  <p>
                    Unlike most other providers you don’t have to pay with just Credit Card or
                    PayPal. You can also pay with Bitcoin, Alt Coins like Ethereum or Litecoin,
                    PerfectMoney, Payza and of course you can still pay by PayPal and Credit Cards.
                    You even get more discounts when you choose longer-term commitments like our
                    attractive yearly plans.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item4">
                  <h3>Free DDOS Protection <i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item4">
                  <p>
                    Unlike other providers who charge extra for DDoS protection, All of our VPS
                    servers comes with DDoS protection for FREE. This means you do not have to worry
                    about your VPS performance at all. We are taking care of your needs while you do
                    focus on your business!
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
  $(document).ready(function () {
    $(".accordion-title").click(function (e) {
      var accordionitem = $(this).attr("data-tab");
      $("#" + accordionitem)
        .slideToggle()
        .parent()
        .siblings()
        .find(".accordion-content")
        .slideUp();

      $(this).toggleClass("active-title");
      $("#" + accordionitem)
        .parent()
        .siblings()
        .find(".accordion-title")
        .removeClass("active-title");

      $("i.fa-chevron-down", this).toggleClass("chevron-top");
      $("#" + accordionitem)
        .parent()
        .siblings()
        .find(".accordion-title i.fa-chevron-down")
        .removeClass("chevron-top");
    });
  });

  </script>
</body>
</html>
