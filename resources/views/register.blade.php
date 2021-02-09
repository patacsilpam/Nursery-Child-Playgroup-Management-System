@extends('layout.master')
@section('Title','Register')
@section('main')
	
	<div class="box">
		<hr>
		<h1 id="box-h2">Register New Child</h1>
		<p id="nursery-title">Child Information</p>

		@if(isset($msg))
		<!--<i id="recordInsertSuccess">{{ $msg }}</i>-->
		@endif
		<div class="input-fields">
			<form action="/register" method="POST">
				@csrf
			<div>
				@if(isset($msg))
				<label id="recordInsertSuccess"  class="fa fa-check"> {{ $msg }}</label>
				@endif
			</div>
			<div> 
				<label>Child ID</label>
				<input type="text" name="ChildID" placeholder="Child ID" required="">	
			</div>
			<div>
				<label>First Name</label>
				<input type="text" name="fname" placeholder="First Name" required="">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="lname" placeholder="Last Name" required="">
			</div>
			<div>
				<label>Birthday</label>
				<select class="select-bday" name="dobday" required="">
					<option value="disabled">Day</option>
			      	<option value="01">01</option>
				    <option value="02">02</option>
				    <option value="03">03</option>
				    <option value="04">04</option>
				    <option value="05">05</option>
				    <option value="06">06</option>
				    <option value="07">07</option>
				    <option value="08">08</option>
				    <option value="09">09</option>
				    <option value="10">10</option>
				    <option value="11">11</option>
				    <option value="12">12</option>
				    <option value="13">13</option>
				    <option value="14">14</option>
				    <option value="15">15</option>
				    <option value="16">16</option>
				    <option value="17">17</option>
				    <option value="18">18</option>
				    <option value="19">19</option>
				    <option value="20">20</option>
				    <option value="21">21</option>
				    <option value="22">22</option>
				    <option value="23">23</option>
				    <option value="24">24</option>
				    <option value="25">25</option>
				    <option value="26">26</option>
				    <option value="27">27</option>
				    <option value="28">28</option>
				    <option value="29">29</option>
				    <option value="30">30</option>
				    <option value="31">31</option>
				</select>
				<select class="select-bday" id="select-dob-month" name="dobmonth" required="">
				    <option value="disabled">Month</option>
				    <option value="January">January</option>
				    <option value="February">February</option>
				    <option value="March">March</option>
				    <option value="April">April</option>
				    <option value="May">May</option>
				    <option value="June">June</option>
				    <option value="July">July</option>
				    <option value="August">August</option>
				    <option value="September">September</option>
				    <option value="October">October</option>
				    <option value="November">November</option>
				    <option value="December">December</option>
				</select>
				<select class="select-bday" class="dobyear" name="dobyear" required="">
					<option value ="disabled">Year</option>
					<option value="2021">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
					<option value="2017">2017</option>	
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
				    <option value="2001">2001</option>
				    <option value="2000">2000</option>
				    <option value="1999">1999</option>
				    <option value="1998">1998</option>
				    <option value="1997">1997</option>
				    <option value="1996">1996</option>
				    <option value="1995">1995</option>
				    <option value="1994">1994</option>
				    <option value="1993">1993</option>
				    <option value="1992">1992</option>
				    <option value="1991">1991</option>
				    <option value="1990">1990</option>
				    <option value="1989">1989</option>
				    <option value="1988">1988</option>
				    <option value="1987">1987</option>
				    <option value="1986">1986</option>
				    <option value="1985">1985</option>
				    <option value="1984">1984</option>
				    <option value="1983">1983</option>
				    <option value="1982">1982</option>
				    <option value="1981">1981</option>
				    <option value="1980">1980</option>
				</select>
			</div><div>
				<label>Admission Date</label>
				<select class="select-bday" name="admitday" required="">
					<option value="disabled">Day</option>
			      	<option value="01">01</option>
				    <option value="02">02</option>
				    <option value="03">03</option>
				    <option value="04">04</option>
				    <option value="05">05</option>
				    <option value="06">06</option>
				    <option value="07">07</option>
				    <option value="08">08</option>
				    <option value="09">09</option>
				    <option value="10">10</option>
				    <option value="11">11</option>
				    <option value="12">12</option>
				    <option value="13">13</option>
				    <option value="14">14</option>
				    <option value="15">15</option>
				    <option value="16">16</option>
				    <option value="17">17</option>
				    <option value="18">18</option>
				    <option value="19">19</option>
				    <option value="20">20</option>
				    <option value="21">21</option>
				    <option value="22">22</option>
				    <option value="23">23</option>
				    <option value="24">24</option>
				    <option value="25">25</option>
				    <option value="26">26</option>
				    <option value="27">27</option>
				    <option value="28">28</option>
				    <option value="29">29</option>
				    <option value="30">30</option>
				    <option value="31">31</option>
				</select>
				<select class="select-bday" id="select-dob-month" name="admitmonth" required="">
				    <option value="disabled">Month</option>
				    <option value="January">January</option>
				    <option value="February">February</option>
				    <option value="March">March</option>
				    <option value="April">April</option>
				    <option value="May">May</option>
				    <option value="June">June</option>
				    <option value="July">July</option>
				    <option value="August">August</option>
				    <option value="September">September</option>
				    <option value="October">October</option>
				    <option value="November">November</option>
				    <option value="December">December</option>
				</select>
				<select class="select-bday" class="dobyear" name="admityear" required="">
					<option value ="disabled">Year</option>
					<option value="2021">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
					<option value="2017">2017</option>	
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
				</select>
			</div>
			<div>
				<label>Gender</label>
				<select id="select-gender" name="gender" required="">
					<option value="----">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div>
				<label>Child Notes</label>
				<input type="text" name="childnotes" placeholder="Notes" required="">
			</div>
		</div>
		<!--Parent Info-->
		<p>Parent Information</p>
		<div class="input-fields">
			<div>
				<label>Parent ID</label>
				<input type="text" name="ParentID" placeholder="Parent ID" required="">
			</div>
			<div>
				<label>Parent Title</label>
				<input type="text" name="ParentTitle" placeholder="Parent Title" required="">
			</div>
			<div>
				<label>First Name (Father) </label>
				<input type="text" name="father_fname" placeholder="First Name (Father)" required="">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="father_lname" placeholder="Last Name" required="">
			</div>
			<div>
				<label>First Name (Mother)</label>
				<input type="text" name="mother_fname" placeholder="First Name (Mother)" required="">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="mother_lname" placeholder="Last Name" required="">
			</div>
			<div>
				<label>Street Address</label>
				<input type="text" name="streetAddress" placeholder="Street Address" required="">
			</div>
			<div>
				<label>City/Town</label>
				<input type="text" name="town_city" placeholder="City/Town" required="">
			</div>
			<div>
				<label>Province</label>
				<input type="text" name="province_states" placeholder="Province" required="">
			</div>
			<div>
				<label>Postal Code</label>
				<input type="text" name="postalCode" placeholder="Postal Code" required="">
			</div>
			<div>
				<label>Phone 1</label>
				<input type="text" name="homePhone" placeholder="Mobile Phone (Home)" required="">
			</div>
			<div>
				<label>Phone 2</label>
				<input type="text" name="workPhone" placeholder="Mobile Phone (Work)" required="">
			</div>
		</div>
		<p id="texts-contact">Contact Information <i>(People to call in case of emergency)</i></p>
		<div class="input-fields">
			<div>
				<label>First Name (Guardian 1)</label>
				<input type="text" name="guardian_fname1" placeholder="First Name (Guardian 1)" required="">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="guardian_lname1" placeholder="Last Name" required="">
			</div>
			<div>
				<label>Relationship</label>
				<input type="text" name="guardian_rel1" placeholder="Relationship to the Child" required="">
			</div>
			<div>
				<label>Mobile Phone</label>
				<input type="text" name="guardian_Phone1" placeholder="Mobile Phone" required="">
			</div>
			<div>
				<label>First Name (Guardian 2)</label>
				<input type="text" name="guardian_fname2" placeholder="First Name (Guardian 2)" required="">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="guardian_lname2" placeholder="Last Name" required="">
			</div>
			<div>
				<label>Relationship</label>
				<input type="text" name="guardian_rel2" placeholder="Relationship to the Child" required="">
			</div>
			<div>
				<label>Mobile Phone</label>
				<input type="text" name="guardian_Phone2" placeholder="Mobile Phone" required="">
			</div>
			<div>
				<a id="buttonSubmit"><input type="Submit" name="btnSubmit" value="Submit" id="btn-submit"></a>
			</div>
		</div>
			</form>
	</div>
@endsection
@section('footer')

@endsection
