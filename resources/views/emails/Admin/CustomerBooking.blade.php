<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }
    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
  </head>
  <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
   
            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
          
                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi <strong>{{ $data['user_name'] }}</strong> </p>
                        <h4>Customer Details</h4>
                        <strong>Name</strong> 
                        {{ $data['user_name'] }}<br>

                        <strong>Email</strong> 
                        {{ $data['user_email'] }}<br>

                        <strong>Contact Number</strong> 
                        {{ $data['user_contact'] }}
                    
                    </td>


                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                        
                        <h4>Booking Details</h4>
                        <table id="cart" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th><h5>Treatment</h5></th>
                                <th><h5>Boking Datetime</h5></th>
                                <th><h5>Therapist</h5></th>
                                <th><h5>Duration</h5></th>
                                <th><h5></h5></th>
                                <th><h5>Subtotal</h5></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ json_encode($data['treatment_name']) }}</td>
                                    <td>{{ $data['booking_date'] }} {{ $data['booking_time'] }} </td>
                                    <td>{{ $data['therapist'] }}</td>
                                    <td> {{ $data['treatmentduration'] }} Hour</td>
                                    <td></td>
                                    <td>RM {{ $data['total_amount'] }}</td>
                                    
                                    <td></td>
                                </tr>
                                                        
                            </tbody>
                        </table> 
                          
                    </td>
                     <!-- START FOOTER -->
                     <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                        
                        <tr>
                            <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                © Copyright ©2020 All rights reserved |Akmal Zamri
                            </td>
                        </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->
                
            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        
  </body>
</html>