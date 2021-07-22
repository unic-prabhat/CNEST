<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
        vertical-align:middle;
    }
    td{
    	vertical-align: middle;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    table thead th
    {
    	background: #5d97b4;
    	color:#fff;
    	padding:4px;
    }
    .gray {
        background-color: lightgray
    }
    .pagenum:before {
    content: counter(page);
}

table.be {
    margin-top: 50px;
}
table.be tbody td:last-child
{
	background-color:#4db79c;
}
.page-break {
 page-break-after: always;
}
.breaker{page-break-before: always}
table.be tbody td{
	background: #f1f1f1;
}
.tab {
    background: #5d97b4;
    padding: 20px;
    color: #fff;
}
.custom_detail h3 {
    background: #5d97b4;
    color: #fff;
    padding: 10px;
    margin: 0;
}

.custom_detail {
    border: 1px solid #5d97b4;
    margin-top: 31px;
}
.custom_detail p {
    margin: 10px;
    font-size: 13px;
}
div.promice
{
  margin-top:30px;
  margin-top: 30px;
  font-size: 12px;
}
.promice {
    background: #e8f1f4;
    padding: 19px;
}
  .input_filed table td{background: #f5f5f5;padding:9px;}
  .input_filed table th{background: transparent;color:#667476;text-align: left}
.promice h3 {
    border-bottom: 2px solid #5e90a6;
    /* margin-bottom: 10px; */
    font-size: 19px;
}
.input_filed table {
    width: 100%;
}
.input_filed h4{
  color:#333338;
}
#pagenumber:before {
content:counter(page) "/" counter(pages);
}
.input_filed label{color:#333338;font-size: 12px;margin-top: 10px;}
table tbody th{padding:4px;}
        @page { margin: 100px 25px; }
    header { position: fixed; top: -80px; left: 0px; right: 0px; height: 100px; }
    footer { position: fixed; bottom: -130px; left: 0px; right: 0px;height: 100px; }
</style>

</head>
<body>

<header>
  <table width="100%">
    <tr>
        <td valign="top"><img src="{{asset('public/log.jpg')}}" alt="" width="250" /></td>
        <td align="right">
       <!--      <h3>Shinra Electric power company</h3>
            <pre>
                Company representative name
                Company address
                Tax ID
                phone
                fax
            </pre> -->
            <img src="{{asset('public/c1.jpg')}}" alt="" width="350"/>
        </td>
    </tr>

  </table>
</header>
<footer>
	<hr>
	  <table width="100%">
    <tr>
        <td valign="top" style="margin-top:30px"><strong>Copyright MPH Boilers 2020</strong></td>
        <td  style="margin-top:30px" id="pagenumber"></td>
        <td align="right" style="margin-top:30px"><span style="font-family: FontAwesome">&#xF156;</span>0845 269 8476</td>
    </tr>

  </table>
	</footer>
  <table width="100%">
    <tr>
<!--         <td><strong>From:</strong> Linblum - Barrio teatral</td>
        <td><strong>To:</strong> Linblum - Barrio Comercial</td> -->
    </tr>

  </table>

  <br/>

  <table width="100%">
  	<tr>
  		<td><img src="{{asset('public/c2.jpg')}}" style="margin-top: 10px"/></td>
  	</tr>
  	  	<tr>
  		<td><img src="{{asset('public/c3.jpg')}}" style="margin-top:-20px"/></td>
  	</tr><br><br><br><br>
  </table>
<div class="content" style="margin-top:10px;">
  <table width="100%" class="be" style="top:100px;">
  	<br><br><br>
    <thead style="background-color: lightgray;">
      <tr>
        <th></th>
        <th>APR%</th>
        <th>Duration</th>
        <th>Deposit</th>
        <th>Loan Amount</th>
        <th>Total Payable</th>
        <th>Monthly Payment</th>
      </tr>
    </thead>
    <tbody >
      <tr style="top:20px">
        <th scope="row" style="background-color:#5d97b4;color:#fff">Option 1</th>
        <td align="center">8.2%</td>
        <td align="center">120 Months</td>
        <td align="center">£ 121.00</td>
        <td align="center">£ 3,593.29</td>
        <td align="center">£ 5,210.41</td>
        <td align="center">£ 43.42</td>
      </tr>
      <tr style="top:20px">
          <th scope="row" style="background-color:#5d97b4;color:#fff">Option 2</th>
          <td align="center">8.2%</td>
          <td align="center">60 Months</td>
          <td align="center">£ 121.00</td>
          <td align="center">£ 3,593.29</td>
          <td align="center">£ 4,361.97</td>
          <td align="center">£ 72.70</td>
      </tr>
      <tr style="top:20px">
          <th scope="row" style="background-color:#5d97b4;color:#fff">Option 3</th>
          <td align="center">0%</td>
          <td align="center">12 Months</td>
          <td align="center">£ 121.00</td>
          <td align="center">£ 3,593.29</td>
          <td align="center">£ 3,593.29</td>
          <td align="center">£ 299.44</td>
      </tr>
    </tbody>
  </table>
      <div class="tab">
          <h3>Your next steps</h3>
          <p>The MPH Boilers team will be in touch with you shortly to make sure you have everything you need to make an
informed decision, in the mean time if you’d like to discuss your quote or need any further support please contact us.</p>
      </div>

        <div class="custom_detail">
          <h3>Customer Details</h3>
              <p><strong>Telephone Number: </strong>07946009002</p>
              <p><strong>Email: </strong>subrat.qtonix@gmail.com</p>
              <p><strong>Installation Address </strong></p>
              <p>16 skibo avenue</p>
              <p>KY7 4PU</p>
      </div>

          <div class="custom_detail">
          <h3>Quotation Summary</h3>
              <p><strong>Quotation Date: </strong> 09/07/2020</p>
              <p><strong>Your Reference: </strong>MPH-3107-204</p>
              <p><strong>Surveyor: </strong>Ewan Mclean</p>
              <p><strong>Estimated Duration: </strong>1 - 2 Days</p>
              <p><strong>Monthly Finance Example: </strong>The monthly finance figures displayed on the front page include a deposit of £ 121.00, with
an APR of 8.2% over 120 months. MPH have a range of finance options available. Please speak to your surveyor or our
office for further information.</p>

      </div>
</div>
<br><br><br>
      <div class="promice page-break">
          <h3>Your next steps</h3>
          <p>Remember, this quotation is given on a fixed-price basis. That means you won't pay a penny more for all of the works
detailed below, even if the work takes longer to complete.</p>
<p>To discuss or accept your quotation, please call our office on <b>0845 269 8476</b>, alternatively email <b>info@mphboilers.org.uk</b></p>
      </div>
      <div class="input_filed">
  <br/>

  <table width="100%">
    <thead>
      <tr>
        <th align="left">BOLT ONS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>[1x] System to Combi Change</td>
      </tr>
    </tbody>
  </table></div>
  <div class="input_filed">
      <h4>Current System Configuration</h4>
      <table>
        <thead>
        <tr>
          <th>CURRENT BOILER TYPE</th>
          <th>CURRENT FLUE</th>
          <th>CURRENT BOILER LOCATION</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Conventional Wall Hung</td>
          <td>Vertical Flue</td>
          <td>Loft</td>
        </tr>
      </tbody>
      </table>
  </div>
        <div class="input_filed">
  <br/>

  <table width="100%">
    <thead>
      <tr>
        <th align="left">EXISTING SHOWER?</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Electric Shower</td>
      </tr>
    </tbody>
  </table></div>
    <div class="input_filed">
      <h4>New System Configuration</h4>
      <table>
        <thead>
        <tr>
          <th>CURRENT BOILER TYPE</th>
          <th>CURRENT FLUE</th>
          <th>CURRENT BOILER LOCATION</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Conventional Wall Hung</td>
          <td>Vertical Flue</td>
          <td>Loft</td>
        </tr>
      </tbody>
      </table>
  </div>
      <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>NEW FLUE</th>
          <th>NEW FLUE LOCATION</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vertical</td>
          <td>First Floor</td>
        </tr>
      </tbody>
      </table>
  </div>
        <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>CONDENSATE TERMINATION</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Drain</td>
        </tr>
      </tbody>
      </table>
  </div><br>
          <div class="input_filed" >
      <table style="
    width: 246px;
    float: right;
">
        <thead>
        <tr>
          <th >NEW CONTROLS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Customer to Supply</td>
        </tr>
      </tbody>
      </table>
  </div>
  <br><br><br>
          <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>NEW CYLINDER REQUIRED?</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Yes - Vented Cylinder</td>
        </tr>
      </tbody>
      </table>
  </div>
            <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>IS THE NEW BOILER BEING FITTED IN A CUPBOARD?</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Yes</td>
        </tr>
      </tbody>
      </table>
  </div>
              <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>WILL THE CUPBOARD NEED ALTERING</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Altered by MPH</td>
        </tr>
      </tbody>
      </table>
  </div>
      <div class="input_filed">
      <h4>Decommission and Removal</h4>
      <table>
        <thead>
        <tr>
          <th>REMOVALS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><li>Hot Water Cylinder</li></td>
        </tr>
      </tbody>
      </table>
  </div>
  <div class="input_filed">
      <h4>Installation Requirements</h4>
      <table>
        <thead>
        <tr>
          <th>CHEMICAL SYSTEM TREATMENT</th>
          <th>GAS SUPPLY REQUIREMENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Chemical Flush and Inhibitor</td>
          <td>Current gas supply deemed satisfactory</td>
        </tr>

      </tbody>
      </table>
  </div>
    <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>ELECTRICAL WORK REQUIRED</th>
          <th>OIL SUPPLY REQUIREMENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><li>New fused spur required</li></td>
          <td>Current Oil supply deemed satisfactory</td>
        </tr>
        
      </tbody>
      </table>
  </div>
      <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>ASBESTOS CONTAINING MATERIALS (ACM) IDENTIFIED?</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>No Asbestos Identified</td>
        </tr>
        
      </tbody>
      </table>
  </div>
            <div class="input_filed" >
      <table style="
    width: 246px;
    float: right;
">
        <thead>
        <tr>
          <th >PARKING REQUIREMENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Driveway</td>
        </tr>
      </tbody>
      </table>
  </div><br><br><br>
        <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>60/100MM FLUE KIT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>(1x) Horizontal Flue Kit</td>
        </tr>
        
      </tbody>
      </table>
  </div>
         <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>MAGNETIC SYSTEM FILTER</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>(1x) 28mm Adey Magnaclean Filter</td>
        </tr>
        
      </tbody>
      </table>
  </div>
         <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>ADDITIONAL CENTRAL HEATING PARTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Required</td>
        </tr>
        
      </tbody>
      </table>
  </div>
        <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>CENTRAL HEATING COMPONENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>(1x) Grundfos UPS2 15-50/60 Pump</td>
        </tr>
        
      </tbody>
      </table>
  </div>
          <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>CONDENSATE COMPONENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Required</td>
        </tr>
        
      </tbody>
      </table>
  </div>
            <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>ADDITIONAL CONDENSATE COMPONENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>(1x) Condense Pump</td>
        </tr>
        
      </tbody>
      </table>
  </div>
            <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>VENTED CYLINDER DIMENSIONS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>(1x) 400x900 Staineless Steel Indirect Cylinder (96 LITRES)</td>
        </tr>
        
      </tbody>
      </table>
  </div>
      <div class="input_filed">
      <h4>Radiator Requirements</h4>
      <table>
        <thead>
        <tr>
          <th>RADIATOR REQUIREMENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Radiators Required</td>
        </tr>

      </tbody>
      </table>
  </div><br>
        <div class="input_filed">
        <label style="margin-top: 5px">RADIATOR MEASUREMENT / LOCATION
</label>
      <table border="1" cellpadding="0">
        <thead>
        <tr>
          <th>Location</th>
          <th>Height</th>
          <th>Width</th>
          <th>P+ / Single (K1) / Double (K2)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Radiators Required</td>
          <td>Radiators Required</td>
          <td>Radiators Required</td>
          <td>Radiators Required</td>
        </tr>

      </tbody>
      </table>
  </div>
      <div class="input_filed">
      <h4>Installation Notes and Photographs</h4>
      <table>
        <thead>
        <tr>
          <th>ADDITIONAL NOTES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>A</td>
        </tr>

      </tbody>
      </table>
  </div>

    <div class="page-break">
           <div class="input_filed">
        <label style="margin-top: 5px">OPTIONAL EXTRAS</label>
      <table border="1" cellpadding="0">
        <thead>
        <tr>
          <th>Description</th>
          <th>Quantity</th>
          <th>Price (Including VAT)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>a</td>
          <td>2</td>
          <td>112</td>
        </tr>

      </tbody>
      </table>
  </div><br>
                  <div class="input_filed">
      <table>
        <thead>
        <tr>
          <th>DEPOSIT REQUIRED</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>£ 121.00</td>
        </tr>
        
      </tbody>
      </table>
  </div>
    </div>

</body>
</html>