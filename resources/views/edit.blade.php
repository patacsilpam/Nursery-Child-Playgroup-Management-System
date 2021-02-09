@extends('layout.master')
@section('Title','Update Child Information')
@section('main')
	
	<div class="box">
		<hr>
		<h1 id="box-h2">Update</h1>
		<p id="nursery-title"> Edit Child Information</p>
		<div>
			@if(isset($msg))
			<i  id="update-msg">{{$msg}}</i>
			@endif
		</div>
		<div class="input-fields">
			<form action="/edit{{$profile[0]->ChildID}}"  method="POST">
				@csrf
			<div>
				<label>First Name</label>
				<input type="text" name="fname" placeholder="First Name" value="{{$profile[0]->fname}}">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="lname" placeholder="Last Name" value="{{$profile[0]->lname}}">
			</div>
			<div>
				<label>Birthday</label>
				<select class="select-bday" name="dobday" id="select-dob-day">
					<option disabled="disabled">Day</option>
			      	<option value="01" {{($profile[0]->dobday === '01') ? 'Selected' : ''}}>01</option>
				    <option value="02" {{($profile[0]->dobday === '02') ? 'Selected' : ''}}>02</option>
				    <option value="03" {{($profile[0]->dobday === '03') ? 'Selected' : ''}}>03</option>
				    <option value="04" {{($profile[0]->dobday === '04') ? 'Selected' : ''}}>04</option>
				    <option value="05" {{($profile[0]->dobday === '05') ? 'Selected' : ''}}>05</option>
				    <option value="06" {{($profile[0]->dobday === '06') ? 'Selected' : ''}}>06</option>
				    <option value="07" {{($profile[0]->dobday === '07') ? 'Selected' : ''}}>07</option>
				    <option value="08" {{($profile[0]->dobday === '08') ? 'Selected' : ''}}>08</option>
				    <option value="09" {{($profile[0]->dobday === '09') ? 'Selected' : ''}}>09</option>
				    <option value="10" {{($profile[0]->dobday === '10') ? 'Selected' : ''}}>10</option>
				    <option value="11" {{($profile[0]->dobday === '11') ? 'Selected' : ''}}>11</option>
				    <option value="12" {{($profile[0]->dobday === '12') ? 'Selected' : ''}}>12</option>
				    <option value="13" {{($profile[0]->dobday === '13') ? 'Selected' : ''}}>13</option>
				    <option value="14" {{($profile[0]->dobday === '14') ? 'Selected' : ''}}>14</option>
				    <option value="15" {{($profile[0]->dobday === '15') ? 'Selected' : ''}}>15</option>
				    <option value="16" {{($profile[0]->dobday === '16') ? 'Selected' : ''}}>16</option>
				    <option value="17" {{($profile[0]->dobday === '17') ? 'Selected' : ''}}>17</option>
				    <option value="18" {{($profile[0]->dobday === '18') ? 'Selected' : ''}}>18</option>
				    <option value="19" {{($profile[0]->dobday === '19') ? 'Selected' : ''}}>19</option>
				    <option value="20" {{($profile[0]->dobday === '20') ? 'Selected' : ''}}>20</option>
				    <option value="21" {{($profile[0]->dobday === '21') ? 'Selected' : ''}}>21</option>
				    <option value="22" {{($profile[0]->dobday === '22') ? 'Selected' : ''}}>22</option>
				    <option value="23" {{($profile[0]->dobday === '23') ? 'Selected' : ''}}>23</option>
				    <option value="24" {{($profile[0]->dobday === '24') ? 'Selected' : ''}}>24</option>
				    <option value="25" {{($profile[0]->dobday === '25') ? 'Selected' : ''}}>25</option>
				    <option value="26" {{($profile[0]->dobday === '26') ? 'Selected' : ''}}>26</option>
				    <option value="27" {{($profile[0]->dobday === '27') ? 'Selected' : ''}}>27</option>
				    <option value="28" {{($profile[0]->dobday === '28') ? 'Selected' : ''}}>28</option>
				    <option value="29" {{($profile[0]->dobday === '29') ? 'Selected' : ''}}>29</option>
				    <option value="30" {{($profile[0]->dobday === '30') ? 'Selected' : ''}}>30</option>
				    <option value="31" {{($profile[0]->dobday === '31') ? 'Selected' : ''}}>31</option>
				</select>
				<select class="select-bday" id="select-dob-month" name="dobmonth">
				   <option disabled="disabled">Month</option>
				    <option value="January" {{($profile[0]->dobmonth === 'January') ? 'Selected' : ''}}>January</option>
				    <option value="February" {{($profile[0]->dobmonth === 'February') ? 'Selected' : ''}}>February</option>
				    <option value="March" {{($profile[0]->dobmonth === 'March') ? 'Selected' : ''}}>March</option>
				    <option value="April" {{($profile[0]->dobmonth === 'April') ? 'Selected' : ''}}>April</option>
				    <option value="May" {{($profile[0]->dobmonth === 'May') ? 'Selected' : ''}}>May</option>
				    <option value="June" {{($profile[0]->dobmonth === 'June') ? 'Selected' : ''}}>June</option>
				    <option value="July" {{($profile[0]->dobmonth === 'July') ? 'Selected' : ''}}>July</option>
				    <option value="August" {{($profile[0]->dobmonth === 'August') ? 'Selected' : ''}}>August</option>
				    <option value="September" {{($profile[0]->dobmonth === 'September') ? 'Selected' : ''}}>September</option>
				    <option value="October" {{($profile[0]->dobmonth === 'October') ? 'Selected' : ''}}>October</option>
				    <option value="November" {{($profile[0]->dobmonth === 'November') ? 'Selected' : ''}}>November</option>
				    <option value="December" {{($profile[0]->dobmonth === 'December') ? 'Selected' : ''}}>December</option>
				</select>
				<select class="select-bday" class="dobyear" name="dobyear" id="select-dob-year">
					<option disabled="disabled">Year</option>
					<option value="2021" {{($profile[0]->dobyear === '2021') ? 'Selected' : ''}}>2021</option>
					<option value="2020" {{($profile[0]->dobyear === '2020') ? 'Selected' : ''}}>2020</option>
					<option value="2019" {{($profile[0]->dobyear === '2019') ? 'Selected' : ''}}>2019</option>
					<option value="2018" {{($profile[0]->dobyear === '2018') ? 'Selected' : ''}}>2018</option>
					<option value="2017" {{($profile[0]->dobyear === '2017') ? 'Selected' : ''}}>2017</option>	
					<option value="2016" {{($profile[0]->dobyear === '2016') ? 'Selected' : ''}}>2016</option>
					<option value="2015" {{($profile[0]->dobyear === '2015') ? 'Selected' : ''}}>2015</option>
					<option value="2014" {{($profile[0]->dobyear === '2014') ? 'Selected' : ''}}>2014</option>
					<option value="2013" {{($profile[0]->dobyear === '2013') ? 'Selected' : ''}}>2013</option>
					<option value="2012" {{($profile[0]->dobyear === '2012') ? 'Selected' : ''}}>2012</option>
					<option value="2011" {{($profile[0]->dobyear === '2011') ? 'Selected' : ''}}>2011</option>
					<option value="2010" {{($profile[0]->dobyear === '2010') ? 'Selected' : ''}}>2010</option>
					<option value="2009" {{($profile[0]->dobyear === '2009') ? 'Selected' : ''}}>2009</option>
					<option value="2008" {{($profile[0]->dobyear === '2008') ? 'Selected' : ''}}>2008</option>
					<option value="2007" {{($profile[0]->dobyear === '2007') ? 'Selected' : ''}}>2007</option>
					<option value="2006" {{($profile[0]->dobyear === '2006') ? 'Selected' : ''}}>2006</option>
					<option value="2005" {{($profile[0]->dobyear === '2005') ? 'Selected' : ''}}>2005</option>
					<option value="2004" {{($profile[0]->dobyear === '2004') ? 'Selected' : ''}}>2004</option>
					<option value="2003" {{($profile[0]->dobyear === '2003') ? 'Selected' : ''}}>2003</option>
					<option value="2002" {{($profile[0]->dobyear === '2002') ? 'Selected' : ''}}>2002</option>
				    <option value="2001" {{($profile[0]->dobyear === '2001') ? 'Selected' : ''}}>2001</option>
				</select>
			</div>
				<div>
				<label>Admission Date</label>
				<select class="select-bday" name="admitday" id="select-dob-day">
					<option disabled="disabled">Day</option>
			      	<option value="01" {{($profile[0]->admitday === '01') ? 'Selected' : ''}}>01</option>
				    <option value="02" {{($profile[0]->admitday === '02') ? 'Selected' : ''}}>02</option>
				    <option value="03" {{($profile[0]->admitday === '03') ? 'Selected' : ''}}>03</option>
				    <option value="04" {{($profile[0]->admitday === '04') ? 'Selected' : ''}}>04</option>
				    <option value="05" {{($profile[0]->admitday === '05') ? 'Selected' : ''}}>05</option>
				    <option value="06" {{($profile[0]->admitday === '06') ? 'Selected' : ''}}>06</option>
				    <option value="07" {{($profile[0]->admitday === '07') ? 'Selected' : ''}}>07</option>
				    <option value="08" {{($profile[0]->admitday === '08') ? 'Selected' : ''}}>08</option>
				    <option value="09" {{($profile[0]->admitday === '09') ? 'Selected' : ''}}>09</option>
				    <option value="10" {{($profile[0]->admitday === '10') ? 'Selected' : ''}}>10</option>
				    <option value="11" {{($profile[0]->admitday === '11') ? 'Selected' : ''}}>11</option>
				    <option value="12" {{($profile[0]->admitday === '12') ? 'Selected' : ''}}>12</option>
				    <option value="13" {{($profile[0]->admitday === '13') ? 'Selected' : ''}}>13</option>
				    <option value="14" {{($profile[0]->admitday === '14') ? 'Selected' : ''}}>14</option>
				    <option value="15" {{($profile[0]->admitday === '15') ? 'Selected' : ''}}>15</option>
				    <option value="16" {{($profile[0]->admitday === '16') ? 'Selected' : ''}}>16</option>
				    <option value="17" {{($profile[0]->admitday === '17') ? 'Selected' : ''}}>17</option>
				    <option value="18" {{($profile[0]->admitday === '18') ? 'Selected' : ''}}>18</option>
				    <option value="19" {{($profile[0]->admitday === '19') ? 'Selected' : ''}}>19</option>
				    <option value="20" {{($profile[0]->admitday === '20') ? 'Selected' : ''}}>20</option>
				    <option value="21" {{($profile[0]->admitday === '21') ? 'Selected' : ''}}>21</option>
				    <option value="22" {{($profile[0]->admitday === '22') ? 'Selected' : ''}}>22</option>
				    <option value="23" {{($profile[0]->admitday === '23') ? 'Selected' : ''}}>23</option>
				    <option value="24" {{($profile[0]->admitday === '24') ? 'Selected' : ''}}>24</option>
				    <option value="25" {{($profile[0]->admitday === '25') ? 'Selected' : ''}}>25</option>
				    <option value="26" {{($profile[0]->admitday === '26') ? 'Selected' : ''}}>26</option>
				    <option value="27" {{($profile[0]->admitday === '27') ? 'Selected' : ''}}>27</option>
				    <option value="28" {{($profile[0]->admitday === '28') ? 'Selected' : ''}}>28</option>
				    <option value="29" {{($profile[0]->admitday === '29') ? 'Selected' : ''}}>29</option>
				    <option value="30" {{($profile[0]->admitday === '30') ? 'Selected' : ''}}>30</option>
				    <option value="31" {{($profile[0]->admitday === '31') ? 'Selected' : ''}}>31</option>
				</select>
				<select class="select-bday" id="select-dob-month" name="admitmonth">
				   <option disabled="disabled">Month</option>
				    <option value="January" {{($profile[0]->admitmonth === 'January') ? 'Selected' : ''}}>January</option>
				    <option value="February" {{($profile[0]->admitmonth === 'February') ? 'Selected' : ''}}>February</option>
				    <option value="March" {{($profile[0]->admitmonth === 'March') ? 'Selected' : ''}}>March</option>
				    <option value="April" {{($profile[0]->admitmonth === 'April') ? 'Selected' : ''}}>April</option>
				    <option value="May" {{($profile[0]->admitmonth === 'May') ? 'Selected' : ''}}>May</option>
				    <option value="June" {{($profile[0]->admitmonth === 'June') ? 'Selected' : ''}}>June</option>
				    <option value="July" {{($profile[0]->admitmonth === 'July') ? 'Selected' : ''}}>July</option>
				    <option value="August" {{($profile[0]->admitmonth === 'August') ? 'Selected' : ''}}>August</option>
				    <option value="September" {{($profile[0]->admitmonth === 'September') ? 'Selected' : ''}}>September</option>
				    <option value="October" {{($profile[0]->admitmonth === 'October') ? 'Selected' : ''}}>October</option>
				    <option value="November" {{($profile[0]->admitmonth === 'November') ? 'Selected' : ''}}>November</option>
				    <option value="December" {{($profile[0]->admitmonth === 'December') ? 'Selected' : ''}}>December</option>
				</select>
				<select class="select-bday" class="dobyear" name="admityear" id="select-dob-year">
					<option disabled="disabled">Year</option>
					<option value="2021" {{($profile[0]->admityear === '2021') ? 'Selected' : ''}}>2021</option>
					<option value="2020" {{($profile[0]->admityear === '2020') ? 'Selected' : ''}}>2020</option>
					<option value="2019" {{($profile[0]->admityear === '2019') ? 'Selected' : ''}}>2019</option>
					<option value="2018" {{($profile[0]->admityear === '2018') ? 'Selected' : ''}}>2018</option>
					<option value="2017" {{($profile[0]->admityear === '2017') ? 'Selected' : ''}}>2017</option>	
					<option value="2016" {{($profile[0]->admityear === '2016') ? 'Selected' : ''}}>2016</option>
					<option value="2015" {{($profile[0]->admityear === '2015') ? 'Selected' : ''}}>2015</option>
					<option value="2014" {{($profile[0]->admityear === '2014') ? 'Selected' : ''}}>2014</option>
					<option value="2013" {{($profile[0]->admityear === '2013') ? 'Selected' : ''}}>2013</option>
					<option value="2012" {{($profile[0]->admityear === '2012') ? 'Selected' : ''}}>2012</option>
					<option value="2011" {{($profile[0]->admityear === '2011') ? 'Selected' : ''}}>2011</option>
				</select>
			</div>
			<div>
				<label>Gender</label>
				<select id="select-gender" name="gender">
					<option disabled="disabled">Gender</option>
					<option value="Male" {{($profile[0]->gender === 'Male') ? 'Selected' : ''}}>Male</option>
					<option value="Female" {{($profile[0]->gender === 'Female') ? 'Selected' : ''}}>Female</option>
				</select>
			</div>
			<div>
				<label>Child Notes</label>
				<input type="text" name="childnotes" placeholder="Notes" value="{{$profile[0]->childnotes}}">
			</div>
			</div>
			<!--Contact Information-->
			<p id="texts-contact">Contact Information <i>(People to call in case of emergency)</i></p>
			<div class="input-fields">
				<div>
				<label>First Name (Guardian 1)</label>
				<input type="text" name="guardian_fname1" placeholder="First Name (Guardian 1)" required="" value="{{$profile[0]->guardian_fname1}}">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="guardian_lname1" placeholder="Last Name" required="" value="{{$profile[0]->guardian_lname1}}">
			</div>
			<div>
				<label>Relationship</label>
				<input type="text" name="guardian_rel1" placeholder="Relationship to the Child" required="" value="{{$profile[0]->guardian_rel1}}">
			</div>
			<div>
				<label>Mobile Phone</label>
				<input type="text" name="guardian_Phone1" placeholder="Mobile Phone" required="" value="{{$profile[0]->guardian_Phone1}}">
			</div>
			<div>
				<label>First Name (Guardian 2)</label>
				<input type="text" name="guardian_fname2" placeholder="First Name (Guardian 2)" required="" value="{{$profile[0]->guardian_fname2}}">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="guardian_lname2" placeholder="Last Name" required="" value="{{$profile[0]->guardian_lname2}}">
			</div>
			<div>
				<label>Relationship</label>
				<input type="text" name="guardian_rel2" placeholder="Relationship to the Child" required="" value="{{$profile[0]->guardian_rel2}}">
			</div>
			<div>
				<label>Mobile Phone</label>
				<input type="text" name="guardian_Phone2" placeholder="Mobile Phone" required="" value="{{$profile[0]->guardian_Phone2}}">
			</div>
			<div>
			<a id="button"><input type="Submit" name="btnEdit"  id="btn-submit" value="Update Record"></a>
			<a href="/information" id="backRecord"><i class="fa fa-arrow-left"> Back</i></a>
				
			</div>

		</div>
	</div>
@endsection
@section('footer')

@endsection
