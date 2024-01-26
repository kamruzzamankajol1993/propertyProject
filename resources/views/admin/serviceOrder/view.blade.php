<!DOCTYPE html>
<html>
<head>
    <title>invoice</title>

 

<style>
 .back_image {
        
        height: 280mm;
        width: 210mm;
        padding-bottom: 30px;
        padding-top: 30px;
    }
</style>


<style>


        p,
        h5,
        h4,
        h6,
        h3,
        h2 {
            padding: 0;
            margin: 0;
        }

    body {
        font-family: 'banglabold', sans-serif;
        font-size: 18px;
        font-weight: bold;
    }

    .pdf_body {
        /* padding-left: 8%;
        padding-right: 8%; */
    }



    table {
        border-collapse: collapse;
        width: 100%;
    }

    .upper_table {
        margin-top: 50px;
    }

    .upper_table tr:nth-child(1) td {
        border: none;
        text-align: center;
        font-size: 45px;
        color: #153F36;
    }

    .upper_table tr:nth-child(2) td {
        border: none;
        text-align: center;
        font-size: 24px;
        color: #263169;
    }

    .second_table {
        margin-top:20px;
    }




    .logo_img {
        text-align: center;
    }

    .bodyTable {
        margin-top: 35px;
    }




    .certificate_name {
        margin: 0 auto;
    }

    .certificate_name_outline {

    }

    .certificate_name_outline h4 {

    }

    .jahar_jonno {
        padding-top: 30px;
        padding-bottom: 30px;
        text-align: center;
    }

    .jahar_jonno h4 {
        font-size: 18px;
        color: #263169;
        text-decoration: underline #263169;
        text-underline-position: under;
    }

    .jahar_jonno p {
        font-size: 14px;
        color: #AA2A41;
        padding-top: 12px;
    }

    .information_table {
        font-size: 14px;
        color: rgb(41, 41, 41);
    }




    .information_table5 {
        margin-top: 14px;
        text-align: justify;
        line-height: 1.7;
    }

    .signeture {
        margin-top: 100px;
        text-align: right;
    }


    .borderd2 {

        font-size: 11px;
        color: rgb(41, 41, 41);
        text-align: center;
    }

    .border_knowledge tr {
        border: 1px solid black;
    }

    .border_knowledge tr td {
        padding: 12px 3px;
    }

    .border_knowledge1 {
        margin-top: 15px;
    }

    .border_knowledge1 tr {
        border: 1px solid black;
    }

    .border_knowledge1 tr td {
        padding: 12px 3px;
    }

    @page {
            margin: 18px;
        }

     

    
</style>


</head>
<body>
    <?php

        $catName1 = DB::table('service_prices')->where('id',$allSystemInfo->servicePriceId)
        ->first();

        $serviceid = DB::table('service_details')->where('id',$catName1->serviceDetailId)
        ->value('serviceId');


        $catName = DB::table('services')->where('id',$serviceid)
        ->value('serviceTitle');

                ?>

        <div class="back_image">
            <div class="pdf_body">
               
                <table class="second_table">
                    <tr>
                        <td style="width: 43%">
                            <div class="firstColomn" style="background-color: #FFA304;float: left;width: 20px;height: 140px;">
                                <span style="visibility:none;color:#FFA30A;">1</span>
                                      </div>
                                      <div class="seconfColomn">
                                        
                                <p><img src="{{ asset('/') }}public/logo1.png" style="width: 150px;padding-left: 5px;"/></p>
                                <p style="font-weight: bold;font-size: 24px;padding-left: 25px;">Digi GrowBig</p>
                                <p style="font-size: 13px;padding-left: 25px;">204/4/A Ahmmed Nagar</p>
                                <p style="font-size: 13px;padding-left: 25px;">Mirpur 1, Dhaka 1216</p>
                                <p style="font-size: 13px;padding-left: 25px;">{{$systemDataAll->sitePhone}}</p>
                                      </div>
                        </td>
                        <td class="logo_img" style="width:24%">
                          
                        </td>
                        <td>
                            <div style="background-color: #FFA204;border-top-left-radius: 25px;border-bottom-left-radius: 25px;">
                                <span style="font-weight: 900;font-size:24px;padding-left: 75px;">INVOICE</span>
                            </div>
                        </td>
                    </tr>
                </table>


                <table class="second_table">
                    <tr>
                        <td style="width: 43%">
                            <span style="padding-left: 25px;font-size: 20px;font-weight: 900">BILL TO:</span><br>
                            <p style="padding-left: 25px;font-size: 12px;font-weight: 900;">{{$allSystemInfo->name }}</p>
                            <p style="padding-left: 25px;font-size: 12px;font-weight: 900;">{{$allSystemInfo->address }}</p>
                            <p style="padding-left: 25px;font-size: 12px;font-weight: 900;">{{$allSystemInfo->phone }}</p>
                        </td>
                        <td class="logo_img" style="width:24%">
                          
                        </td>
                        <td>
                            <p style="padding-left: 100px;font-size: 14px;">Invoice No:#{{$systemDataAll->id}}</p>
                            <p style="padding-left: 100px;font-size: 14px;">Date:{{ $systemDataAll->created_at->format('d-m-Y') }}</p>
                        </td>
                    </tr>
                </table>


                <table class="second_table">
                    <tr>
                        <td style="width: 100%">
                            <table class="bta" style="width: 100%;">
                                <thead style=" border-bottom: 2px solid hsl(0, 85%, 3%);">
                                  <tr>
                               
                                    <th scope="col" style="padding: 15px;text-align: left;">ITEM DESCRIPTION</th>
                                    <th scope="col" style="padding: 15px;text-align: left;">PRICE</th>
                                    <th scope="col"  style="padding: 15px;text-align: left;">QTY</th>
                                    <th scope="col" style="padding: 15px;text-align: left;">TOTAL</th>
                                  </tr>
                                </thead>
                                <tbody >
                                  <tr style=" border-bottom: 2px solid hsl(0, 85%, 3%);">
                                    <td style="padding: 15px;text-align: left;"> {{ $catName1->serviceTitle }} ({{ $catName }})</td>
                                    <td  style="padding: 15px;text-align: left;">{{$allSystemInfo->amount }}</td>
                                    <td style="padding: 15px;text-align: left;">1</td>
                                    <td style="padding: 15px;text-align: left;">{{$allSystemInfo->amount }}</td>
                                  </tr>
                                 
                                  <tr style=" ">
                                  
                                        <th style="padding: 15px;text-align: left;">&nbsp;</th>
                                        <td colspan="2" style="padding: 15px;text-align: left;border-bottom: 2px solid hsl(0, 85%, 3%);">Total</td>
                                        <td style="padding: 15px;text-align: left;border-bottom: 2px solid hsl(0, 85%, 3%);">{{$allSystemInfo->amount }}</td>
                                  </tr>
        
                                  
                                 
                                </tbody>
                              </table>
                        </td>
                       
                    </tr>
                </table>



                
                <table class="second_table" style="margin-top: 150px;">
                    <tr>
                        <td style="width: 100%">
                            <span style="padding-left: 25px;font-size: 20px;font-weight: 900">Payment Method:</span><br>
                            <span style="padding-left: 25px;font-size: 12px;font-weight: 900;">{{$allSystemInfo->paymentType }}</span>
                        </td>
                      
                    </tr>
                </table>

                <table class="second_table">
                    <tr>
                        <td style="width: 43%">
                            <span style="padding-left: 25px;font-size: 20px;font-weight: 900">Term and Condition:</span><br>
                                <p style="padding-left: 25px;font-size: 12px;font-weight: 900">Condition One</p>
                                <p style="padding-left: 25px;font-size: 12px;font-weight: 900;">Condition Two</p>
                                <p style="padding-left: 25px;font-size: 12px;font-weight: 900;">Condition Three</p>
                        </td>
                        <td class="logo_img" style="width:24%">
                          
                        </td>
                        <td>
                            <img src="{{ asset('/') }}public/demos.jpg" style="width: 150px;height: 100px;"/>
                            <p style="font-size: 15px;font-weight: 900;">Shamima Nasrin</p>
                            <p style="font-size: 15px;">Marketing Manager</p>
                        </td>
                    </tr>
                </table>




                <table class="second_table" style="margin-top: 190px;">
                    <tr>
                        <td style="width: 100%">
                            <section style="background-color: #FFA304;height: 60px;width:100%;">
                                <span style="color: #FFA304;">dsd</span>
                                                        </section>
                        </td>
                      
                    </tr>
                </table>

               
            </div>


    </div>
</body>
</html>





