@extends('layout.master')
@section('Title','Update Session')
@section('main')
	<div class="box">
		<p>Edit Child Information</p>
		<form action="/updateSession{{$session[0]->sessionID}}" method="POST">
			@csrf
			<div>
			<label class="text">First Name</label>
			<input class="input" type="text" name="session_fname" placeholder="First Name" required="" value="{{$session[0]->session_fname}}">
			<label class="text">Last Name</label>
			<input class="input" id="session-lname" type="text" name="session_lname" placeholder="Last Name" required="" value="{{$session[0]->session_lname}}">
			<table class="tableSession">
				<tr>
					<th><p class="session-th">Day</p></th>
					<th><p class="session-th">Start Time</p></th>
					<th><p class="session-th">End Time</p></th>
					<th><p class="session-th">Total Hours</p></th>
				</tr>
				<tr class="tr">
					<td>Monday</td>
					<td>
						<select class="select-margin" name="startMon">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->startMon === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->startMon === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->startMon === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->startMon === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->startMon === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->startMon === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->startMon === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->startMon === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->startMon === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->startMon === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->startMon === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->startMon === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->startMon === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->startMon === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->startMon === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->startMon === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->startMon === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->startMon === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->startMon === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->startMon === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->startMon === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->startMon === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->startMon === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->startMon === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->startMon === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->startMon === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->startMon === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->startMon === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->startMon === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->startMon === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->startMon === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->startMon === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->startMon === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->startMon === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->startMon === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->startMon === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->startMon === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->startMon === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->startMon === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->startMon === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->startMon === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->startMon === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->startMon === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->startMon === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->startMon === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->startMon === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->startMon === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->startMon === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->startMon === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->startMon === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->startMon === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->startMon === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->startMon === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->startMon === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->startMon === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->startMon === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->startMon === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->startMon === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->startMon === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->startMon === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->startMon === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->startMon === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->startMon === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->startMon === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->startMon === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->startMon === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->startMon === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->startMon === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->startMon === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->startMon === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->startMon === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->startMon === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->startMon === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->startMon === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->startMon === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->startMon === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->startMon === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->startMon === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->startMon === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->startMon === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->startMon === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->startMon === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->startMon === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->startMon === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->startMon === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->startMon === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->startMon === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->startMon === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->startMon === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->startMon === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->startMon === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->startMon === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->startMon === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->startMon === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->startMon === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->startMon === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->startMon === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->startMon === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->startMon === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->startMon === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->startMon === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->startMon === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->startMon === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->startMon === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->startMon === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->startMon === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->startMon === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->startMon === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->startMon === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->startMon === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->startMon === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->startMon === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->startMon === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->startMon === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->startMon === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->startMon === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->startMon === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->startMon === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->startMon === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->startMon === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->startMon === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->startMon === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->startMon === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->startMon === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->startMon === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->startMon === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->startMon === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->startMon === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->startMon === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->startMon === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->startMon === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->startMon === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->startMon === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->startMon === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->startMon === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->startMon === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->startMon === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->startMon === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->startMon === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->startMon === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->startMon === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->startMon === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->startMon === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->startMon === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->startMon === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->startMon === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->startMon === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->startMon === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->startMon === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->startMon === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->startMon === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->startMon === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->startMon ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->startMon === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->startMon === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->startMon === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->startMon === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->startMon === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->startMon === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->startMon === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->startMon === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->startMon === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->startMon === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->startMon === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->startMon ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->startMon === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->startMon === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->startMon === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->startMon === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->startMon === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->startMon === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->startMon === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->startMon === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->startMon === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->startMon === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->startMon === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->startMon ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->startMon === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->startMon === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->startMon === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->startMon === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->startMon === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->startMon === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->startMon === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->startMon === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->startMon === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->startMon === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->startMon === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->startMon ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->startMon === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->startMon === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->startMon === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->startMon === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->startMon === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->startMon === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->startMon === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->startMon === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->startMon === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->startMon === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->startMon === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->startMon ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->startMon === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->startMon === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->startMon === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->startMon === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->startMon === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->startMon === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->startMon === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->startMon === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->startMon === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->startMon === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->startMon === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->startMon ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->startMon === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->startMon === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->startMon === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->startMon === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->startMon === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->startMon === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->startMon === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->startMon === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->startMon === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->startMon === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->startMon === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->startMon ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->startMon === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->startMon === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->startMon === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->startMon === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->startMon === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->startMon === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->startMon === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->startMon === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->startMon === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->startMon === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->startMon === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->startMon ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->startMon === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->startMon === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->startMon === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->startMon === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->startMon === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->startMon === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->startMon === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->startMon === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->startMon === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->startMon === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->startMon === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->startMon ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->startMon === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->startMon === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->startMon === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->startMon === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->startMon === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->startMon === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->startMon === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->startMon === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->startMon === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->startMon === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->startMon === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->startMon ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->startMon === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->startMon === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->startMon === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->startMon === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->startMon === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->startMon === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->startMon === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->startMon === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->startMon === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->startMon === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->startMon === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->startMon ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->startMon === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->startMon === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->startMon === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>
						<select class="select-margin" name="endMon">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->endMon === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->endMon === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->endMon === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->endMon === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->endMon === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->endMon === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->endMon === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->endMon === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->endMon === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->endMon === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->endMon === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->endMon === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->endMon === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->endMon === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->endMon === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->endMon === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->endMon === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->endMon === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->endMon === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->endMon === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->endMon === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->endMon === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->endMon === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->endMon === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->endMon === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->endMon === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->endMon === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->endMon === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->endMon === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->endMon === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->endMon === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->endMon === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->endMon === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->endMon === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->endMon === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->endMon === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->endMon === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->endMon === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->endMon === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->endMon === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->endMon === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->endMon === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->endMon === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->endMon === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->endMon === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->endMon === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->endMon === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->endMon === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->endMon === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->endMon === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->endMon === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->endMon === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->endMon === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->endMon === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->endMon === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->endMon === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->endMon === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->endMon === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->endMon === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->endMon === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->endMon === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->endMon === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->endMon === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->endMon === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->endMon === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->endMon === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->endMon === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->endMon === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->endMon === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->endMon === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->endMon === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->endMon === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->endMon === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->endMon === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->endMon === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->endMon === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->endMon === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->endMon === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->endMon === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->endMon === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->endMon === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->endMon === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->endMon === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->endMon === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->endMon === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->endMon === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->endMon === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->endMon === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->endMon === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->endMon === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->endMon === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->endMon === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->endMon === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->endMon === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->endMon === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->endMon === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->endMon === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->endMon === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->endMon === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->endMon === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->endMon === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->endMon === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->endMon === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->endMon === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->endMon === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->endMon === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->endMon === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->endMon === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->endMon === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->endMon === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->endMon === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->endMon === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->endMon === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->endMon === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->endMon === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->endMon === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->endMon === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->endMon === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->endMon === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->endMon === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->endMon === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->endMon === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->endMon === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->endMon === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->endMon === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->endMon === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->endMon === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->endMon === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->endMon === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->endMon === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->endMon === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->endMon === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->endMon === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->endMon === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->endMon === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->endMon === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->endMon === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->endMon === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->endMon === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->endMon === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->endMon === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->endMon === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->endMon === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->endMon === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->endMon === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->endMon === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->endMon === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->endMon === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->endMon === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->endMon === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->endMon === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->endMon === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->endMon ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->endMon === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->endMon === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->endMon === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->endMon === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->endMon === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->endMon === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->endMon === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->endMon === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->endMon === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->endMon === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->endMon === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->endMon ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->endMon === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->endMon === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->endMon === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->endMon === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->endMon === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->endMon === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->endMon === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->endMon === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->endMon === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->endMon === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->endMon === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->endMon ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->endMon === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->endMon === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->endMon === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->endMon === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->endMon === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->endMon === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->endMon === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->endMon === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->endMon === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->endMon === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->endMon === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->endMon ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->endMon === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->endMon === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->endMon === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->endMon === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->endMon === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->endMon === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->endMon === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->endMon === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->endMon === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->endMon === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->endMon === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->endMon ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->endMon === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->endMon === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->endMon === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->endMon === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->endMon === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->endMon === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->endMon === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->endMon === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->endMon === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->endMon === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->endMon === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->endMon ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->endMon === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->endMon === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->endMon === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->endMon === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->endMon === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->endMon === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->endMon === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->endMon === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->endMon === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->endMon === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->endMon === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->endMon ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->endMon === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->endMon === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->endMon === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->endMon === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->endMon === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->endMon === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->endMon === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->endMon === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->endMon === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->endMon === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->endMon === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->endMon ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->endMon === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->endMon === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->endMon === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->endMon === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->endMon === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->endMon === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->endMon === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->endMon === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->endMon === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->endMon === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->endMon === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->endMon ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->endMon === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->endMon === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->endMon === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->endMon === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->endMon === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->endMon === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->endMon === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->endMon === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->endMon === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->endMon === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->endMon === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->endMon ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->endMon === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->endMon === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->endMon === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->endMon === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->endMon === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->endMon === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->endMon === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->endMon === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->endMon === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->endMon === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->endMon === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->endMon ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->endMon === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->endMon === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->endMon === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>{{$session[0]->totalMon}}</td>
				</tr>
				<tr>
					<td>Tuesday</td>
					<td>
						<select class="select-margin" name="startTue">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->startTue === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->startTue === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->startTue === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->startTue === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->startTue === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->startTue === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->startTue === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->startTue === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->startTue === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->startTue === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->startTue === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->startTue === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->startTue === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->startTue === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->startTue === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->startTue === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->startTue === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->startTue === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->startTue === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->startTue === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->startTue === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->startTue === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->startTue === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->startTue === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->startTue === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->startTue === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->startTue === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->startTue === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->startTue === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->startTue === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->startTue === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->startTue === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->startTue === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->startTue === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->startTue === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->startTue === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->startTue === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->startTue === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->startTue === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->startTue === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->startTue === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->startTue === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->startTue === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->startTue === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->startTue === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->startTue === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->startTue === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->startTue === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->startTue === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->startTue === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->startTue === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->startTue === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->startTue === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->startTue === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->startTue === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->startTue === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->startTue === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->startTue === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->startTue === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->startTue === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->startTue === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->startTue === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->startTue === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->startTue === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->startTue === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->startTue === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->startTue === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->startTue === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->startTue === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->startTue === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->startTue === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->startTue === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->startTue === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->startTue === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->startTue === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->startTue === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->startTue === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->startTue === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->startTue === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->startTue === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->startTue === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->startTue === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->startTue === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->startTue === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->startTue === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->startTue === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->startTue === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->startTue === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->startTue === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->startTue === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->startTue === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->startTue === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->startTue === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->startTue === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->startTue === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->startTue === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->startTue === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->startTue === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->startTue === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->startTue === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->startTue === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->startTue === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->startTue === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->startTue === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->startTue === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->startTue === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->startTue === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->startTue === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->startTue === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->startTue === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->startTue === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->startTue === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->startTue === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->startTue === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->startTue === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->startTue === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->startTue === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->startTue === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->startTue === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->startTue === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->startTue === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->startTue === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->startTue === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->startTue === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->startTue === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->startTue === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->startTue === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->startTue === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->startTue === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->startTue === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->startTue === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->startTue === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->startTue === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->startTue === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->startTue === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->startTue === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->startTue === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->startTue === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->startTue === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->startTue === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->startTue === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->startTue === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->startTue === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->startTue === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->startTue === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->startTue === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->startTue === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->startTue === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->startTue === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->startTue === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->startTue === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->startTue === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->startTue ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->startTue === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->startTue === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->startTue === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->startTue === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->startTue === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->startTue === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->startTue === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->startTue === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->startTue === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->startTue === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->startTue === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->startTue ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->startTue === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->startTue === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->startTue === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->startTue === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->startTue === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->startTue === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->startTue === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->startTue === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->startTue === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->startTue === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->startTue === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->startTue ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->startTue === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->startTue === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->startTue === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->startTue === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->startTue === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->startTue === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->startTue === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->startTue === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->startTue === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->startTue === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->startTue === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->startTue ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->startTue === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->startTue === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->startTue === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->startTue === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->startTue === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->startTue === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->startTue === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->startTue === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->startTue === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->startTue === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->startTue === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->startTue ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->startTue === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->startTue === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->startTue === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->startTue === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->startTue === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->startTue === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->startTue === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->startTue === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->startTue === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->startTue === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->startTue === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->startTue ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->startTue === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->startTue === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->startTue === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->startTue === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->startTue === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->startTue === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->startTue === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->startTue === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->startTue === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->startTue === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->startTue === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->startTue ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->startTue === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->startTue === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->startTue === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->startTue === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->startTue === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->startTue === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->startTue === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->startTue === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->startTue === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->startTue === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->startTue === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->startTue ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->startTue === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->startTue === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->startTue === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->startTue === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->startTue === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->startTue === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->startTue === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->startTue === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->startTue === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->startTue === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->startTue === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->startTue ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->startTue === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->startTue === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->startTue === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->startTue === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->startTue === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->startTue === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->startTue === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->startTue === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->startTue === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->startTue === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->startTue === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->startTue ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->startTue === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->startTue === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->startTue === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->startTue === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->startTue === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->startTue === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->startTue === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->startTue === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->startTue === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->startTue === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->startTue === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->startTue ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->startTue === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->startTue === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->startTue === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>
						<select class="select-margin" name="endTue">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->endTue === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->endTue === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->endTue === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->endTue === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->endTue === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->endTue === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->endTue === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->endTue === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->endTue === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->endTue === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->endTue === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->endTue === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->endTue === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->endTue === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->endTue === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->endTue === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->endTue === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->endTue === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->endTue === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->endTue === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->endTue === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->endTue === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->endTue === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->endTue === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->endTue === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->endTue === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->endTue === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->endTue === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->endTue === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->endTue === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->endTue === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->endTue === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->endTue === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->endTue === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->endTue === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->endTue === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->endTue === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->endTue === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->endTue === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->endTue === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->endTue === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->endTue === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->endTue === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->endTue === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->endTue === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->endTue === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->endTue === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->endTue === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->endTue === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->endTue === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->endTue === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->endTue === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->endTue === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->endTue === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->endTue === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->endTue === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->endTue === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->endTue === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->endTue === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->endTue === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->endTue === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->endTue === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->endTue === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->endTue === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->endTue === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->endTue === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->endTue === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->endTue === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->endTue === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->endTue === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->endTue === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->endTue === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->endTue === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->endTue === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->endTue === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->endTue === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->endTue === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->endTue === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->endTue === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->endTue === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->endTue === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->endTue === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->endTue === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->endTue === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->endTue === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->endTue === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->endTue === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->endTue === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->endTue === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->endTue === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->endTue === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->endTue === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->endTue === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->endTue === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->endTue === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->endTue === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->endTue === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->endTue === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->endTue === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->endTue === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->endTue === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->endTue === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->endTue === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->endTue === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->endTue === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->endTue === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->endTue === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->endTue === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->endTue === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->endTue === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->endTue === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->endTue === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->endTue === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->endTue === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->endTue === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->endTue === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->endTue === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->endTue === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->endTue === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->endTue === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->endTue === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->endTue === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->endTue === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->endTue === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->endTue === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->endTue === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->endTue === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->endTue === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->endTue === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->endTue === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->endTue === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->endTue === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->endTue === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->endTue === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->endTue === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->endTue === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->endTue === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->endTue === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->endTue === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->endTue === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->endTue === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->endTue === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->endTue === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->endTue === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->endTue === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->endTue === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->endTue === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->endTue === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->endTue === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->endTue === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->endTue === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->endTue === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->endTue ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->endTue === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->endTue === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->endTue === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->endTue === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->endTue === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->endTue === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->endTue === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->endTue === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->endTue === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->endTue === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->endTue === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->endTue ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->endTue === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->endTue === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->endTue === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->endTue === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->endTue === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->endTue === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->endTue === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->endTue === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->endTue === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->endTue === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->endTue === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->endTue ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->endTue === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->endTue === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->endTue === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->endTue === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->endTue === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->endTue === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->endTue === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->endTue === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->endTue === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->endTue === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->endTue === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->endTue ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->endTue === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->endTue === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->endTue === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->endTue === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->endTue === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->endTue === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->endTue === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->endTue === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->endTue === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->endTue === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->endTue === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->endTue ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->endTue === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->endTue === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->endTue === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->endTue === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->endTue === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->endTue === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->endTue === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->endTue === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->endTue === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->endTue === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->endTue === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->endTue ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->endTue === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->endTue === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->endTue === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->endTue === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->endTue === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->endTue === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->endTue === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->endTue === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->endTue === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->endTue === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->endTue === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->endTue ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->endTue === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->endTue === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->endTue === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->endTue === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->endTue === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->endTue === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->endTue === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->endTue === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->endTue === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->endTue === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->endTue === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->endTue ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->endTue === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->endTue === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->endTue === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->endTue === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->endTue === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->endTue === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->endTue === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->endTue === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->endTue === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->endTue === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->endTue === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->endTue ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->endTue === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->endTue === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->endTue === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->endTue === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->endTue === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->endTue === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->endTue === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->endTue === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->endTue === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->endTue === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->endTue === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->endTue ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->endTue === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->endTue === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->endTue === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->endTue === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->endTue === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->endTue === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->endTue === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->endTue === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->endTue === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->endTue === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->endTue === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->endTue ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->endTue === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->endTue === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->endTue === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>{{$session[0]->totalTue}}</td>
				</tr>
				<tr>
					<td>Wednesday</td>
					<td>
						<select class="select-margin" name="startWed">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->startWed === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->startWed === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->startWed === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->startWed === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->startWed === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->startWed === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->startWed === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->startWed === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->startWed === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->startWed === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->startWed === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->startWed === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->startWed === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->startWed === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->startWed === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->startWed === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->startWed === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->startWed === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->startWed === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->startWed === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->startWed === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->startWed === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->startWed === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->startWed === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->startWed === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->startWed === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->startWed === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->startWed === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->startWed === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->startWed === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->startWed === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->startWed === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->startWed === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->startWed === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->startWed === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->startWed === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->startWed === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->startWed === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->startWed === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->startWed === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->startWed === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->startWed === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->startWed === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->startWed === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->startWed === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->startWed === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->startWed === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->startWed === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->startWed === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->startWed === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->startWed === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->startWed === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->startWed === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->startWed === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->startWed === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->startWed === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->startWed === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->startWed === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->startWed === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->startWed === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->startWed === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->startWed === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->startWed === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->startWed === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->startWed === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->startWed === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->startWed === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->startWed === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->startWed === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->startWed === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->startWed === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->startWed === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->startWed === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->startWed === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->startWed === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->startWed === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->startWed === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->startWed === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->startWed === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->startWed === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->startWed === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->startWed === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->startWed === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->startWed === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->startWed === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->startWed === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->startWed === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->startWed === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->startWed === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->startWed === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->startWed === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->startWed === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->startWed === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->startWed === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->startWed === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->startWed === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->startWed === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->startWed === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->startWed === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->startWed === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->startWed === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->startWed === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->startWed === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->startWed === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->startWed === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->startWed === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->startWed === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->startWed === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->startWed === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->startWed === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->startWed === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->startWed === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->startWed === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->startWed === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->startWed === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->startWed === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->startWed === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->startWed === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->startWed === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->startWed === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->startWed === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->startWed === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->startWed === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->startWed === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->startWed === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->startWed === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->startWed === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->startWed === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->startWed === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->startWed === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->startWed === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->startWed === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->startWed === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->startWed === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->startWed === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->startWed === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->startWed === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->startWed === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->startWed === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->startWed === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->startWed === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->startWed === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->startWed === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->startWed === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->startWed === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->startWed === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->startWed === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->startWed === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->startWed === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->startWed === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->startWed === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->startWed === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->startWed ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->startWed === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->startWed === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->startWed === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->startWed === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->startWed === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->startWed === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->startWed === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->startWed === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->startWed === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->startWed === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->startWed === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->startWed ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->startWed === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->startWed === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->startWed === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->startWed === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->startWed === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->startWed === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->startWed === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->startWed === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->startWed === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->startWed === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->startWed === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->startWed ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->startWed === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->startWed === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->startWed === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->startWed === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->startWed === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->startWed === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->startWed === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->startWed === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->startWed === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->startWed === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->startWed === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->startWed ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->startWed === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->startWed === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->startWed === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->startWed === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->startWed === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->startWed === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->startWed === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->startWed === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->startWed === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->startWed === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->startWed === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->startWed ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->startWed === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->startWed === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->startWed === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->startWed === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->startWed === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->startWed === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->startWed === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->startWed === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->startWed === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->startWed === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->startWed === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->startWed ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->startWed === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->startWed === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->startWed === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->startWed === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->startWed === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->startWed === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->startWed === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->startWed === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->startWed === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->startWed === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->startWed === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->startWed ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->startWed === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->startWed === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->startWed === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->startWed === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->startWed === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->startWed === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->startWed === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->startWed === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->startWed === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->startWed === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->startWed === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->startWed ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->startWed === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->startWed === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->startWed === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->startWed === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->startWed === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->startWed === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->startWed === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->startWed === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->startWed === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->startWed === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->startWed === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->startWed ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->startWed === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->startWed === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->startWed === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->startWed === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->startWed === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->startWed === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->startWed === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->startWed === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->startWed === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->startWed === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->startWed === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->startWed ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->startWed === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->startWed === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->startWed === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->startWed === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->startWed === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->startWed === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->startWed === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->startWed === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->startWed === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->startWed === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->startWed === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->startWed ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->startWed === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->startWed === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->startWed === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>
						<select class="select-margin" name="endWed">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->endWed === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->endWed === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->endWed === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->endWed === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->endWed === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->endWed === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->endWed === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->endWed === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->endWed === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->endWed === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->endWed === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->endWed === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->endWed === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->endWed === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->endWed === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->endWed === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->endWed === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->endWed === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->endWed === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->endWed === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->endWed === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->endWed === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->endWed === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->endWed === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->endWed === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->endWed === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->endWed === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->endWed === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->endWed === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->endWed === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->endWed === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->endWed === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->endWed === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->endWed === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->endWed === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->endWed === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->endWed === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->endWed === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->endWed === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->endWed === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->endWed === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->endWed === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->endWed === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->endWed === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->endWed === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->endWed === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->endWed === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->endWed === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->endWed === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->endWed === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->endWed === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->endWed === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->endWed === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->endWed === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->endWed === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->endWed === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->endWed === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->endWed === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->endWed === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->endWed === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->endWed === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->endWed === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->endWed === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->endWed === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->endWed === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->endWed === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->endWed === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->endWed === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->endWed === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->endWed === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->endWed === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->endWed === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->endWed === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->endWed === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->endWed === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->endWed === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->endWed === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->endWed === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->endWed === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->endWed === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->endWed === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->endWed === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->endWed === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->endWed === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->endWed === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->endWed === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->endWed === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->endWed === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->endWed === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->endWed === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->endWed === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->endWed === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->endWed === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->endWed === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->endWed === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->endWed === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->endWed === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->endWed === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->endWed === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->endWed === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->endWed === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->endWed === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->endWed === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->endWed === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->endWed === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->endWed === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->endWed === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->endWed === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->endWed === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->endWed === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->endWed === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->endWed === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->endWed === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->endWed === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->endWed === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->endWed === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->endWed === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->endWed === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->endWed === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->endWed === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->endWed === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->endWed === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->endWed === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->endWed === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->endWed === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->endWed === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->endWed === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->endWed === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->endWed === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->endWed === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->endWed === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->endWed === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->endWed === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->endWed === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->endWed === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->endWed === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->endWed === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->endWed === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->endWed === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->endWed === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->endWed === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->endWed === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->endWed === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->endWed === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->endWed === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->endWed === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->endWed === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->endWed === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->endWed === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->endWed === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->endWed === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->endWed === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->endWed ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->endWed === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->endWed === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->endWed === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->endWed === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->endWed === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->endWed === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->endWed === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->endWed === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->endWed === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->endWed === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->endWed === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->endWed ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->endWed === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->endWed === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->endWed === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->endWed === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->endWed === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->endWed === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->endWed === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->endWed === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->endWed === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->endWed === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->endWed === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->endWed ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->endWed === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->endWed === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->endWed === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->endWed === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->endWed === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->endWed === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->endWed === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->endWed === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->endWed === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->endWed === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->endWed === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->endWed ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->endWed === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->endWed === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->endWed === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->endWed === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->endWed === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->endWed === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->endWed === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->endWed === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->endWed === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->endWed === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->endWed === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->endWed ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->endWed === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->endWed === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->endWed === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->endWed === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->endWed === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->endWed === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->endWed === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->endWed === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->endWed === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->endWed === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->endWed === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->endWed ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->endWed === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->endWed === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->endWed === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->endWed === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->endWed === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->endWed === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->endWed === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->endWed === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->endWed === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->endWed === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->endWed === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->endWed ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->endWed === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->endWed === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->endWed === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->endWed === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->endWed === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->endWed === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->endWed === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->endWed === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->endWed === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->endWed === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->endWed === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->endWed ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->endWed === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->endWed === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->endWed === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->endWed === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->endWed === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->endWed === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->endWed === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->endWed === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->endWed === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->endWed === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->endWed === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->endWed ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->endWed === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->endWed === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->endWed === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->endWed === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->endWed === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->endWed === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->endWed === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->endWed === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->endWed === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->endWed === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->endWed === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->endWed ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->endWed === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->endWed === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->endWed === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->endWed === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->endWed === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->endWed === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->endWed === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->endWed === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->endWed === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->endWed === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->endWed === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->endWed ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->endWed === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->endWed === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->endWed === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>{{$session[0]->totalWed}}</td>
				</tr>
				<tr>
					<td>Thursday</td>
					<td>
						<select class="select-margin" name="startThu">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->startThu === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->startThu === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->startThu === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->startThu === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->startThu === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->startThu === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->startThu === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->startThu === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->startThu === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->startThu === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->startThu === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->startThu === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->startThu === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->startThu === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->startThu === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->startThu === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->startThu === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->startThu === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->startThu === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->startThu === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->startThu === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->startThu === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->startThu === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->startThu === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->startThu === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->startThu === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->startThu === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->startThu === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->startThu === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->startThu === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->startThu === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->startThu === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->startThu === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->startThu === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->startThu === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->startThu === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->startThu === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->startThu === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->startThu === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->startThu === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->startThu === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->startThu === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->startThu === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->startThu === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->startThu === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->startThu === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->startThu === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->startThu === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->startThu === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->startThu === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->startThu === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->startThu === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->startThu === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->startThu === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->startThu === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->startThu === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->startThu === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->startThu === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->startThu === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->startThu === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->startThu === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->startThu === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->startThu === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->startThu === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->startThu === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->startThu === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->startThu === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->startThu === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->startThu === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->startThu === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->startThu === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->startThu === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->startThu === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->startThu === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->startThu === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->startThu === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->startThu === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->startThu === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->startThu === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->startThu === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->startThu === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->startThu === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->startThu === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->startThu === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->startThu === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->startThu === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->startThu === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->startThu === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->startThu === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->startThu === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->startThu === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->startThu === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->startThu === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->startThu === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->startThu === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->startThu === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->startThu === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->startThu === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->startThu === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->startThu === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->startThu === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->startThu === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->startThu === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->startThu === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->startThu === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->startThu === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->startThu === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->startThu === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->startThu === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->startThu === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->startThu === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->startThu === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->startThu === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->startThu === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->startThu === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->startThu === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->startThu === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->startThu === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->startThu === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->startThu === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->startThu === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->startThu === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->startThu === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->startThu === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->startThu === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->startThu === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->startThu === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->startThu === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->startThu === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->startThu === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->startThu === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->startThu === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->startThu === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->startThu === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->startThu === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->startThu === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->startThu === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->startThu === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->startThu === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->startThu === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->startThu === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->startThu === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->startThu === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->startThu === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->startThu === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->startThu === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->startThu === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->startThu === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->startThu === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->startThu === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->startThu === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->startThu === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->startThu ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->startThu === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->startThu === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->startThu === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->startThu === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->startThu === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->startThu === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->startThu === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->startThu === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->startThu === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->startThu === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->startThu === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->startThu ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->startThu === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->startThu === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->startThu === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->startThu === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->startThu === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->startThu === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->startThu === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->startThu === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->startThu === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->startThu === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->startThu === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->startThu ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->startThu === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->startThu === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->startThu === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->startThu === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->startThu === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->startThu === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->startThu === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->startThu === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->startThu === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->startThu === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->startThu === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->startThu ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->startThu === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->startThu === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->startThu === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->startThu === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->startThu === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->startThu === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->startThu === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->startThu === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->startThu === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->startThu === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->startThu === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->startThu ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->startThu === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->startThu === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->startThu === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->startThu === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->startThu === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->startThu === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->startThu === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->startThu === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->startThu === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->startThu === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->startThu === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->startThu ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->startThu === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->startThu === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->startThu === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->startThu === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->startThu === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->startThu === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->startThu === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->startThu === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->startThu === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->startThu === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->startThu === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->startThu ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->startThu === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->startThu === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->startThu === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->startThu === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->startThu === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->startThu === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->startThu === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->startThu === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->startThu === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->startThu === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->startThu === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->startThu ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->startThu === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->startThu === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->startThu === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->startThu === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->startThu === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->startThu === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->startThu === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->startThu === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->startThu === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->startThu === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->startThu === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->startThu ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->startThu === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->startThu === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->startThu === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->startThu === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->startThu === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->startThu === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->startThu === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->startThu === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->startThu === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->startThu === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->startThu === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->startThu ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->startThu === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->startThu === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->startThu === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->startThu === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->startThu === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->startThu === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->startThu === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->startThu === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->startThu === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->startThu === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->startThu === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->startThu ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->startThu === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->startThu === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->startThu === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>
						<select class="select-margin" name="endThu">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->endThu === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->endThu === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->endThu === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->endThu === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->endThu === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->endThu === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->endThu === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->endThu === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->endThu === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->endThu === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->endThu === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->endThu === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->endThu === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->endThu === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->endThu === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->endThu === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->endThu === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->endThu === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->endThu === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->endThu === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->endThu === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->endThu === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->endThu === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->endThu === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->endThu === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->endThu === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->endThu === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->endThu === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->endThu === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->endThu === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->endThu === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->endThu === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->endThu === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->endThu === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->endThu === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->endThu === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->endThu === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->endThu === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->endThu === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->endThu === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->endThu === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->endThu === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->endThu === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->endThu === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->endThu === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->endThu === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->endThu === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->endThu === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->endThu === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->endThu === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->endThu === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->endThu === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->endThu === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->endThu === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->endThu === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->endThu === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->endThu === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->endThu === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->endThu === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->endThu === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->endThu === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->endThu === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->endThu === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->endThu === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->endThu === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->endThu === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->endThu === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->endThu === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->endThu === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->endThu === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->endThu === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->endThu === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->endThu === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->endThu === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->endThu === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->endThu === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->endThu === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->endThu === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->endThu === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->endThu === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->endThu === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->endThu === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->endThu === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->endThu === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->endThu === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->endThu === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->endThu === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->endThu === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->endThu === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->endThu === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->endThu === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->endThu === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->endThu === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->endThu === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->endThu === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->endThu === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->endThu === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->endThu === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->endThu === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->endThu === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->endThu === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->endThu === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->endThu === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->endThu === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->endThu === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->endThu === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->endThu === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->endThu === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->endThu === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->endThu === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->endThu === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->endThu === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->endThu === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->endThu === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->endThu === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->endThu === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->endThu === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->endThu === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->endThu === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->endThu === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->endThu === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->endThu === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->endThu === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->endThu === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->endThu === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->endThu === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->endThu === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->endThu === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->endThu === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->endThu === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->endThu === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->endThu === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->endThu === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->endThu === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->endThu === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->endThu === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->endThu === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->endThu === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->endThu === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->endThu === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->endThu === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->endThu === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->endThu === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->endThu === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->endThu === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->endThu === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->endThu === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->endThu === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->endThu === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->endThu === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->endThu === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->endThu === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->endThu ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->endThu === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->endThu === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->endThu === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->endThu === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->endThu === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->endThu === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->endThu === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->endThu === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->endThu === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->endThu === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->endThu === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->endThu ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->endThu === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->endThu === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->endThu === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->endThu === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->endThu === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->endThu === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->endThu === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->endThu === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->endThu === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->endThu === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->endThu === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->endThu ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->endThu === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->endThu === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->endThu === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->endThu === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->endThu === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->endThu === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->endThu === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->endThu === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->endThu === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->endThu === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->endThu === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->endThu ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->endThu === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->endThu === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->endThu === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->endThu === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->endThu === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->endThu === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->endThu === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->endThu === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->endThu === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->endThu === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->endThu === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->endThu ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->endThu === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->endThu === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->endThu === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->endThu === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->endThu === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->endThu === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->endThu === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->endThu === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->endThu === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->endThu === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->endThu === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->endThu ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->endThu === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->endThu === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->endThu === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->endThu === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->endThu === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->endThu === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->endThu === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->endThu === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->endThu === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->endThu === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->endThu === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->endThu ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->endThu === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->endThu === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->endThu === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->endThu === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->endThu === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->endThu === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->endThu === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->endThu === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->endThu === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->endThu === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->endThu === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->endThu ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->endThu === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->endThu === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->endThu === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->endThu === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->endThu === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->endThu === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->endThu === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->endThu === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->endThu === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->endThu === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->endThu === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->endThu ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->endThu === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->endThu === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->endThu === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->endThu === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->endThu === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->endThu === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->endThu === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->endThu === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->endThu === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->endThu === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->endThu === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->endThu ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->endThu === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->endThu === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->endThu === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->endThu === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->endThu === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->endThu === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->endThu === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->endThu === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->endThu === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->endThu === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->endThu === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->endThu ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->endThu === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->endThu === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->endThu === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>{{$session[0]->totalThu}}</td>
				</tr>
				<tr>
					<td>Friday</td>
					<td>
						<select class="select-margin" name="startFri">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->startFri === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->startFri === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->startFri === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->startFri === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->startFri === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->startFri === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->startFri === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->startFri === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->startFri === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->startFri === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->startFri === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->startFri === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->startFri === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->startFri === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->startFri === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->startFri === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->startFri === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->startFri === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->startFri === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->startFri === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->startFri === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->startFri === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->startFri === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->startFri === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->startFri === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->startFri === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->startFri === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->startFri === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->startFri === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->startFri === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->startFri === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->startFri === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->startFri === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->startFri === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->startFri === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->startFri === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->startFri === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->startFri === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->startFri === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->startFri === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->startFri === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->startFri === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->startFri === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->startFri === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->startFri === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->startFri === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->startFri === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->startFri === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->startFri === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->startFri === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->startFri === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->startFri === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->startFri === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->startFri === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->startFri === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->startFri === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->startFri === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->startFri === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->startFri === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->startFri === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->startFri === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->startFri === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->startFri === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->startFri === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->startFri === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->startFri === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->startFri === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->startFri === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->startFri === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->startFri === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->startFri === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->startFri === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->startFri === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->startFri === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->startFri === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->startFri === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->startFri === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->startFri === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->startFri === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->startFri === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->startFri === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->startFri === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->startFri === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->startFri === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->startFri === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->startFri === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->startFri === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->startFri === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->startFri === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->startFri === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->startFri === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->startFri === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->startFri === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->startFri === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->startFri === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->startFri === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->startFri === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->startFri === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->startFri === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->startFri === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->startFri === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->startFri === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->startFri === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->startFri === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->startFri === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->startFri === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->startFri === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->startFri === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->startFri === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->startFri === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->startFri === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->startFri === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->startFri === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->startFri === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->startFri === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->startFri === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->startFri === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->startFri === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->startFri === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->startFri === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->startFri === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->startFri === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->startFri === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->startFri === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->startFri === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->startFri === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->startFri === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->startFri === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->startFri === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->startFri === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->startFri === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->startFri === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->startFri === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->startFri === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->startFri === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->startFri === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->startFri === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->startFri === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->startFri === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->startFri === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->startFri === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->startFri === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->startFri === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->startFri === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->startFri === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->startFri === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->startFri === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->startFri === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->startFri === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->startFri === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->startFri === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->startFri === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->startFri ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->startFri === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->startFri === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->startFri === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->startFri === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->startFri === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->startFri === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->startFri === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->startFri === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->startFri === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->startFri === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->startFri === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->startFri ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->startFri === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->startFri === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->startFri === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->startFri === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->startFri === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->startFri === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->startFri === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->startFri === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->startFri === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->startFri === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->startFri === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->startFri ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->startFri === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->startFri === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->startFri === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->startFri === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->startFri === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->startFri === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->startFri === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->startFri === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->startFri === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->startFri === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->startFri === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->startFri ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->startFri === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->startFri === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->startFri === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->startFri === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->startFri === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->startFri === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->startFri === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->startFri === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->startFri === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->startFri === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->startFri === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->startFri ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->startFri === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->startFri === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->startFri === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->startFri === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->startFri === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->startFri === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->startFri === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->startFri === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->startFri === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->startFri === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->startFri === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->startFri ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->startFri === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->startFri === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->startFri === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->startFri === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->startFri === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->startFri === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->startFri === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->startFri === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->startFri === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->startFri === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->startFri === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->startFri ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->startFri === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->startFri === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->startFri === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->startFri === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->startFri === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->startFri === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->startFri === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->startFri === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->startFri === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->startFri === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->startFri === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->startFri ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->startFri === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->startFri === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->startFri === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->startFri === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->startFri === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->startFri === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->startFri === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->startFri === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->startFri === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->startFri === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->startFri === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->startFri ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->startFri === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->startFri === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->startFri === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->startFri === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->startFri === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->startFri === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->startFri === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->startFri === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->startFri === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->startFri === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->startFri === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->startFri ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->startFri === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->startFri === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->startFri === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->startFri === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->startFri === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->startFri === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->startFri === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->startFri === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->startFri === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->startFri === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->startFri === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->startFri ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->startFri === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->startFri === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->startFri === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>
						<select class="select-margin" name="endFri">
							<option value="">Time</option>
							<option value="1.0" {{($session[0]->endFri === '1.0') ? 'Selected' : ''}}>1:00</option>
							<option value="1.083333" {{($session[0]->endFri === '1.083333') ? 'Selected' : ''}}>1:05</option>
							<option value="1.166667" {{($session[0]->endFri === '1.166667') ? 'Selected' : ''}}>1:10</option>
							<option value="1.25" {{($session[0]->endFri === '1.25') ? 'Selected' : ''}}>1:15</option>
							<option value="1.333333" {{($session[0]->endFri === '1.333333') ? 'Selected' : ''}}>1:20</option>
							<option value="1.416667" {{($session[0]->endFri === '1.416667') ? 'Selected' : ''}}>1:25</option>
							<option value="1.5" {{($session[0]->endFri === '1.5') ? 'Selected' : ''}} >1:30</option>
							<option value="1.583333" {{($session[0]->endFri === '1.583333') ? 'Selected' : ''}} >1:35</option>
							<option value="1.666667" {{($session[0]->endFri === '1.666667') ? 'Selected' : ''}}>1:40</option>
							<option value="1.75" {{($session[0]->endFri === '1.75') ? 'Selected' : ''}}>1:45</option>
							<option value="1.833333" {{($session[0]->endFri === '1.833333') ? 'Selected' : ''}}>1:50</option>
							<option value="1.916667" {{($session[0]->endFri === '1.916667') ? 'Selected' : ''}}>1:55</option>
							<option value="2.00" {{($session[0]->endFri === '2.00') ? 'Selected' : ''}}>2:00</option>
							<option value="2.083333" {{($session[0]->endFri === '2.083333') ? 'Selected' : ''}}>2:05</option>
							<option value="2.166667" {{($session[0]->endFri === '2.166667') ? 'Selected' : ''}}>2:10</option>
							<option value="2.25" {{($session[0]->endFri === '2.25') ? 'Selected' : ''}}>2:15</option>
							<option value="2.333333" {{($session[0]->endFri === '2.333333') ? 'Selected' : ''}}>2:20</option>
							<option value="2.416667" {{($session[0]->endFri === '2.416667') ? 'Selected' : ''}}>2:25</option>
							<option value="	2.5" {{($session[0]->endFri === '2.5') ? 'Selected' : ''}}>2:30</option>
							<option value="2.583333" {{($session[0]->endFri === '2.583333') ? 'Selected' : ''}} >2:35</option>
							<option value="2.666667" {{($session[0]->endFri === '2.666667') ? 'Selected' : ''}}>2:40</option>
							<option value="2.75" {{($session[0]->endFri === '2.75') ? 'Selected' : ''}}>2:45</option>
							<option value="2.833333" {{($session[0]->endFri === '2.833333') ? 'Selected' : ''}}>2:50</option>
							<option value="2.916667" {{($session[0]->endFri === '2.916667') ? 'Selected' : ''}}>2:55</option>
							<option value="3.00" {{($session[0]->endFri === '3.00') ? 'Selected' : ''}}>3:00</option>
							<option value="3.083333" {{($session[0]->endFri === '3.083333') ? 'Selected' : ''}}>3:05</option>
							<option value="3.166667" {{($session[0]->endFri === '3.166667') ? 'Selected' : ''}}>3:10</option>
							<option value="3.25" {{($session[0]->endFri === '3.25') ? 'Selected' : ''}}>3:15</option>
							<option value="3.333333" {{($session[0]->endFri === '3.333333') ? 'Selected' : ''}}>3:20</option>
							<option value="3.416667" {{($session[0]->endFri === '3.416667') ? 'Selected' : ''}}>3:25</option>
							<option value="	3.5" {{($session[0]->endFri === '3.5') ? 'Selected' : ''}}>3:30</option>
							<option value="3.583333" {{($session[0]->endFri === '3.583333') ? 'Selected' : ''}} >3:35</option>
							<option value="3.666667" {{($session[0]->endFri === '3.666667') ? 'Selected' : ''}}>3:40</option>
							<option value="3.75" {{($session[0]->endFri === '3.75') ? 'Selected' : ''}}>3:45</option>
							<option value="3.833333" {{($session[0]->endFri === '3.833333') ? 'Selected' : ''}}>3:50</option>
							<option value="3.916667" {{($session[0]->endFri === '3.916667') ? 'Selected' : ''}}>3:55</option>
							<option value="4.00" {{($session[0]->endFri === '4.00') ? 'Selected' : ''}}>4:00</option>
							<option value="4.083333" {{($session[0]->endFri === '4.083333') ? 'Selected' : ''}}>4:05</option>
							<option value="4.166667" {{($session[0]->endFri === '4.166667') ? 'Selected' : ''}}>4:10</option>
							<option value="4.25" {{($session[0]->endFri === '4.25') ? 'Selected' : ''}}>4:15</option>
							<option value="4.333333" {{($session[0]->endFri === '4.333333') ? 'Selected' : ''}}>4:20</option>
							<option value="4.416667" {{($session[0]->endFri === '4.416667') ? 'Selected' : ''}}>4:25</option>
							<option value="	4.5" {{($session[0]->endFri === '4.5') ? 'Selected' : ''}}>4:30</option>
							<option value="4.583333" {{($session[0]->endFri === '4.583333') ? 'Selected' : ''}} >4:35</option>
							<option value="4.666667" {{($session[0]->endFri === '4.666667') ? 'Selected' : ''}}>4:40</option>
							<option value="4.75" {{($session[0]->endFri === '4.75') ? 'Selected' : ''}}>3:45</option>
							<option value="4.833333" {{($session[0]->endFri === '4.833333') ? 'Selected' : ''}}>4:50</option>
							<option value="4.916667" {{($session[0]->endFri === '4.916667') ? 'Selected' : ''}}>4:55</option>
							<option value="5.00" {{($session[0]->endFri === '5.00') ? 'Selected' : ''}}>5:00</option>
							<option value="5.083333" {{($session[0]->endFri === '5.083333') ? 'Selected' : ''}}>5:05</option>
							<option value="5.166667" {{($session[0]->endFri === '5.166667') ? 'Selected' : ''}}>5:10</option>
							<option value="5.25" {{($session[0]->endFri === '5.25') ? 'Selected' : ''}}>5:15</option>
							<option value="5.333333" {{($session[0]->endFri === '5.333333') ? 'Selected' : ''}}>5:20</option>
							<option value="5.416667" {{($session[0]->endFri === '5.416667') ? 'Selected' : ''}}>5:25</option>
							<option value="	5.5" {{($session[0]->endFri === '5.5') ? 'Selected' : ''}}>5:30</option>
							<option value="5.583333" {{($session[0]->endFri === '5.583333') ? 'Selected' : ''}} >5:35</option>
							<option value="5.666667" {{($session[0]->endFri === '5.666667') ? 'Selected' : ''}}>5:40</option>
							<option value="5.75" {{($session[0]->endFri === '5.75') ? 'Selected' : ''}}>5:45</option>
							<option value="5.833333" {{($session[0]->endFri === '5.833333') ? 'Selected' : ''}}>5:50</option>
							<option value="5.916667" {{($session[0]->endFri === '5.916667') ? 'Selected' : ''}}>5:55</option>
							<option value="6.00" {{($session[0]->endFri === '6.00') ? 'Selected' : ''}}>6:00</option>
							<option value="6.083333" {{($session[0]->endFri === '6.083333') ? 'Selected' : ''}}>6:05</option>
							<option value="6.166667" {{($session[0]->endFri === '6.166667') ? 'Selected' : ''}}>6:10</option>
							<option value="6.25" {{($session[0]->endFri === '6.25') ? 'Selected' : ''}}>6:15</option>
							<option value="6.333333" {{($session[0]->endFri === '6.333333') ? 'Selected' : ''}}>6:20</option>
							<option value="6.416667" {{($session[0]->endFri === '6.416667') ? 'Selected' : ''}}>6:25</option>
							<option value="6.5" {{($session[0]->endFri === '6.5') ? 'Selected' : ''}}>6:30</option>
							<option value="6.583333" {{($session[0]->endFri === '6.583333') ? 'Selected' : ''}} >6:35</option>
							<option value="6.666667" {{($session[0]->endFri === '6.666667') ? 'Selected' : ''}}>6:40</option>
							<option value="6.75" {{($session[0]->endFri === '6.75') ? 'Selected' : ''}}>6:45</option>
							<option value="6.833333" {{($session[0]->endFri === '6.833333') ? 'Selected' : ''}}>6:50</option>
							<option value="6.916667" {{($session[0]->endFri === '6.916667') ? 'Selected' : ''}}>6:55</option>
							<option value="7.00" {{($session[0]->endFri === '7.00') ? 'Selected' : ''}}>7:00</option>
							<option value="7.083333" {{($session[0]->endFri === '7.083333') ? 'Selected' : ''}}>7:05</option>
							<option value="7.166667" {{($session[0]->endFri === '7.166667') ? 'Selected' : ''}}>7:10</option>
							<option value="7.25" {{($session[0]->endFri === '7.25') ? 'Selected' : ''}}>7:15</option>
							<option value="7.333333" {{($session[0]->endFri === '7.333333') ? 'Selected' : ''}}>7:20</option>
							<option value="7.416667" {{($session[0]->endFri === '7.416667') ? 'Selected' : ''}}>7:25</option>
							<option value="7.5" {{($session[0]->endFri === '7.5') ? 'Selected' : ''}}>7:30</option>
							<option value="7.583333" {{($session[0]->endFri === '7.583333') ? 'Selected' : ''}} >7:35</option>
							<option value="7.666667" {{($session[0]->endFri === '7.666667') ? 'Selected' : ''}}>7:40</option>
							<option value="7.75" {{($session[0]->endFri === '7.75') ? 'Selected' : ''}}>7:45</option>
							<option value="7.833333" {{($session[0]->endFri === '7.833333') ? 'Selected' : ''}}>7:50</option>
							<option value="7.916667" {{($session[0]->endFri === '7.916667') ? 'Selected' : ''}}>7:55</option>
							<option value="8.00" {{($session[0]->endFri === '8.00') ? 'Selected' : ''}}>8:00</option>
							<option value="8.083333" {{($session[0]->endFri === '8.083333') ? 'Selected' : ''}}>8:05</option>
							<option value="8.166667" {{($session[0]->endFri === '8.166667') ? 'Selected' : ''}}>8:10</option>
							<option value="8.25" {{($session[0]->endFri === '8.25') ? 'Selected' : ''}}>8:15</option>
							<option value="8.333333" {{($session[0]->endFri === '8.333333') ? 'Selected' : ''}}>8:20</option>
							<option value="8.416667" {{($session[0]->endFri === '8.416667') ? 'Selected' : ''}}>8:25</option>
							<option value="8.5" {{($session[0]->endFri === '8.5') ? 'Selected' : ''}}>8:30</option>
							<option value="8.583333" {{($session[0]->endFri === '8.583333') ? 'Selected' : ''}} >8:35</option>
							<option value="8.666667" {{($session[0]->endFri === '8.666667') ? 'Selected' : ''}}>8:40</option>
							<option value="8.75" {{($session[0]->endFri === '8.75') ? 'Selected' : ''}}>8:45</option>
							<option value="8.833333" {{($session[0]->endFri === '8.833333') ? 'Selected' : ''}}>8:50</option>
							<option value="8.916667" {{($session[0]->endFri === '8.916667') ? 'Selected' : ''}}>8:55</option>
							<option value="9.00" {{($session[0]->endFri === '9.00') ? 'Selected' : ''}}>9:00</option>
							<option value="9.083333" {{($session[0]->endFri === '9.083333') ? 'Selected' : ''}}>9:05</option>
							<option value="9.166667" {{($session[0]->endFri === '9.166667') ? 'Selected' : ''}}>9:10</option>
							<option value="9.25" {{($session[0]->endFri === '9.25') ? 'Selected' : ''}}>9:15</option>
							<option value="9.333333" {{($session[0]->endFri === '9.333333') ? 'Selected' : ''}}>9:20</option>
							<option value="9.416667" {{($session[0]->endFri === '9.416667') ? 'Selected' : ''}}>9:25</option>
							<option value="9.5" {{($session[0]->endFri === '9.5') ? 'Selected' : ''}}>9:30</option>
							<option value="9.583333" {{($session[0]->endFri === '9.583333') ? 'Selected' : ''}} >9:35</option>
							<option value="9.666667" {{($session[0]->endFri === '9.666667') ? 'Selected' : ''}}>9:40</option>
							<option value="9.75" {{($session[0]->endFri === '9.75') ? 'Selected' : ''}}>9:45</option>
							<option value="9.833333" {{($session[0]->endFri === '9.833333') ? 'Selected' : ''}}>9:50</option>
							<option value="9.916667" {{($session[0]->endFri === '9.916667') ? 'Selected' : ''}}>9:55</option>
							<option value="10.00" {{($session[0]->endFri === '10.00') ? 'Selected' : ''}}>10:00</option>
							<option value="10.083333" {{($session[0]->endFri === '10.083333') ? 'Selected' : ''}}>10:05</option>
							<option value="10.166667" {{($session[0]->endFri === '10.166667') ? 'Selected' : ''}}>10:10</option>
							<option value="10.25" {{($session[0]->endFri === '10.25') ? 'Selected' : ''}}>10:15</option>
							<option value="10.333333" {{($session[0]->endFri === '10.333333') ? 'Selected' : ''}}>10:20</option>
							<option value="10.416667" {{($session[0]->endFri === '10.416667') ? 'Selected' : ''}}>10:25</option>
							<option value="10.5" {{($session[0]->endFri === '10.5') ? 'Selected' : ''}}>10:30</option>
							<option value="10.583333" {{($session[0]->endFri === '10.583333') ? 'Selected' : ''}} >10:35</option>
							<option value="10.666667" {{($session[0]->endFri === '10.666667') ? 'Selected' : ''}}>10:40</option>
							<option value="10.75" {{($session[0]->endFri === '10.75') ? 'Selected' : ''}}>10:45</option>
							<option value="10.833333" {{($session[0]->endFri === '10.833333') ? 'Selected' : ''}}>10:50</option>
							<option value="10.916667" {{($session[0]->endFri === '10.916667') ? 'Selected' : ''}}>10:55</option>
							<option value="11.00" {{($session[0]->endFri === '11.00') ? 'Selected' : ''}}>11:00</option>
							<option value="11.083333" {{($session[0]->endFri === '11.083333') ? 'Selected' : ''}}>11:05</option>
							<option value="11.166667" {{($session[0]->endFri === '11.166667') ? 'Selected' : ''}}>11:10</option>
							<option value="11.25" {{($session[0]->endFri === '11.25') ? 'Selected' : ''}}>10:15</option>
							<option value="11.333333" {{($session[0]->endFri === '11.333333') ? 'Selected' : ''}}>11:20</option>
							<option value="11.416667" {{($session[0]->endFri === '11.416667') ? 'Selected' : ''}}>11:25</option>
							<option value="11.5" {{($session[0]->endFri === '11.5') ? 'Selected' : ''}}>10:30</option>
							<option value="11.583333" {{($session[0]->endFri === '11.583333') ? 'Selected' : ''}} >11:35</option>
							<option value="11.666667" {{($session[0]->endFri === '11.666667') ? 'Selected' : ''}}>11:40</option>
							<option value="11.75" {{($session[0]->endFri === '11.75') ? 'Selected' : ''}}>11:45</option>
							<option value="11.833333" {{($session[0]->endFri === '11.833333') ? 'Selected' : ''}}>11:50</option>
							<option value="11.916667" {{($session[0]->endFri === '11.916667') ? 'Selected' : ''}}>11:55</option>
							<option value="12.00" {{($session[0]->endFri === '12.00') ? 'Selected' : ''}}>12:00</option>
							<option value="12.083333" {{($session[0]->endFri === '12.083333') ? 'Selected' : ''}}>12:05</option>
							<option value="12.166667" {{($session[0]->endFri === '12.166667') ? 'Selected' : ''}}>12:10</option>
							<option value="12.25" {{($session[0]->endFri === '12.25') ? 'Selected' : ''}}>12:15</option>
							<option value="12.333333" {{($session[0]->endFri === '12.333333') ? 'Selected' : ''}}>12:20</option>
							<option value="12.416667" {{($session[0]->endFri === '12.416667') ? 'Selected' : ''}}>12:25</option>
							<option value="12.5" {{($session[0]->endFri === '12.5') ? 'Selected' : ''}}>12:30</option>
							<option value="12.583333" {{($session[0]->endFri === '12.583333') ? 'Selected' : ''}} >12:35</option>
							<option value="12.666667" {{($session[0]->endFri === '12.666667') ? 'Selected' : ''}}>12:40</option>
							<option value="12.75" {{($session[0]->endFri === '12.75') ? 'Selected' : ''}}>12:45</option>
							<option value="12.833333" {{($session[0]->endFri === '12.833333') ? 'Selected' : ''}}>12:50</option>
							<option value="12.916667" {{($session[0]->endFri === '12.916667') ? 'Selected' : ''}}>12:55</option>
							<option value="13.00" {{($session[0]->endFri === '13.00') ? 'Selected' : ''}}>13:00</option>
							<option value="13.083333" {{($session[0]->endFri === '13.083333') ? 'Selected' : ''}}>13:05</option>
							<option value="13.166667" {{($session[0]->endFri === '13.166667') ? 'Selected' : ''}}>13:10</option>
							<option value="13.25" {{($session[0]->endFri === '13.25') ? 'Selected' : ''}}>13:15</option>
							<option value="13.333333" {{($session[0]->endFri === '13.333333') ? 'Selected' : ''}}>13:20</option>
							<option value="13.416667" {{($session[0]->endFri === '13.416667') ? 'Selected' : ''}}>13:25</option>
							<option value="13.5" {{($session[0]->endFri === '13.5') ? 'Selected' : ''}}>13:30</option>
							<option value="13.583333" {{($session[0]->endFri === '13.583333') ? 'Selected' : ''}} >13:35</option>
							<option value="13.666667" {{($session[0]->endFri ==='13.666667') ? 'Selected' : ''}}>13:40</option>
							<option value="13.75" {{($session[0]->endFri === '13.75') ? 'Selected' : ''}}>13:45</option>
							<option value="13.833333" {{($session[0]->endFri === '13.833333') ? 'Selected' : ''}}>13:50</option>
							<option value="13.916667" {{($session[0]->endFri === '13.916667') ? 'Selected' : ''}}>13:55</option>
							<option value="14.00" {{($session[0]->endFri === '14.00') ? 'Selected' : ''}}>14:00</option>
							<option value="14.083333" {{($session[0]->endFri === '14.083333') ? 'Selected' : ''}}>14:05</option>
							<option value="14.166667" {{($session[0]->endFri === '14.166667') ? 'Selected' : ''}}>14:10</option>
							<option value="14.25" {{($session[0]->endFri === '14.25') ? 'Selected' : ''}}>14:15</option>
							<option value="14.333333" {{($session[0]->endFri === '14.333333') ? 'Selected' : ''}}>14:20</option>
							<option value="14.416667" {{($session[0]->endFri === '14.416667') ? 'Selected' : ''}}>14:25</option>
							<option value="14.5" {{($session[0]->endFri === '14.5') ? 'Selected' : ''}}>14:30</option>
							<option value="14.583333" {{($session[0]->endFri === '14.583333') ? 'Selected' : ''}} >14:35</option>
							<option value="14.666667" {{($session[0]->endFri ==='14.666667') ? 'Selected' : ''}}>14:40</option>
							<option value="14.75" {{($session[0]->endFri === '14.75') ? 'Selected' : ''}}>14:45</option>
							<option value="14.833333" {{($session[0]->endFri === '14.833333') ? 'Selected' : ''}}>14:50</option>
							<option value="14.916667" {{($session[0]->endFri === '14.916667') ? 'Selected' : ''}}>14:55</option>
							<option value="15.00" {{($session[0]->endFri === '15.00') ? 'Selected' : ''}}>15:00</option>
							<option value="15.083333" {{($session[0]->endFri === '15.083333') ? 'Selected' : ''}}>15:05</option>
							<option value="15.166667" {{($session[0]->endFri === '15.166667') ? 'Selected' : ''}}>15:10</option>
							<option value="15.25" {{($session[0]->endFri === '15.25') ? 'Selected' : ''}}>15:15</option>
							<option value="15.333333" {{($session[0]->endFri === '15.333333') ? 'Selected' : ''}}>15:20</option>
							<option value="15.416667" {{($session[0]->endFri === '15.416667') ? 'Selected' : ''}}>15:25</option>
							<option value="15.5" {{($session[0]->endFri === '15.5') ? 'Selected' : ''}}>15:30</option>
							<option value="15.583333" {{($session[0]->endFri === '14.583333') ? 'Selected' : ''}} >15:35</option>
							<option value="15.666667" {{($session[0]->endFri ==='15.666667') ? 'Selected' : ''}}>15:40</option>
							<option value="15.75" {{($session[0]->endFri === '15.75') ? 'Selected' : ''}}>15:45</option>
							<option value="15.833333" {{($session[0]->endFri === '15.833333') ? 'Selected' : ''}}>15:50</option>
							<option value="15.916667" {{($session[0]->endFri === '15.916667') ? 'Selected' : ''}}>15:55</option>
							<option value="16.00" {{($session[0]->endFri === '16.00') ? 'Selected' : ''}}>16:00</option>
							<option value="16.083333" {{($session[0]->endFri === '16.083333') ? 'Selected' : ''}}>16:05</option>
							<option value="16.166667" {{($session[0]->endFri === '16.166667') ? 'Selected' : ''}}>16:10</option>
							<option value="16.25" {{($session[0]->endFri === '16.25') ? 'Selected' : ''}}>16:15</option>
							<option value="16.333333" {{($session[0]->endFri === '16.333333') ? 'Selected' : ''}}>16:20</option>
							<option value="16.416667" {{($session[0]->endFri === '16.416667') ? 'Selected' : ''}}>16:25</option>
							<option value="16.5" {{($session[0]->endFri === '16.5') ? 'Selected' : ''}}>16:30</option>
							<option value="16.583333" {{($session[0]->endFri === '16.583333') ? 'Selected' : ''}} >16:35</option>
							<option value="16.666667" {{($session[0]->endFri ==='16.666667') ? 'Selected' : ''}}>16:40</option>
							<option value="16.75" {{($session[0]->endFri === '16.75') ? 'Selected' : ''}}>16:45</option>
							<option value="16.833333" {{($session[0]->endFri === '16.833333') ? 'Selected' : ''}}>16:50</option>
							<option value="16.916667" {{($session[0]->endFri === '16.916667') ? 'Selected' : ''}}>16:55</option>
							<option value="17.00" {{($session[0]->endFri === '17.00') ? 'Selected' : ''}}>17:00</option>
							<option value="17.083333" {{($session[0]->endFri === '17.083333') ? 'Selected' : ''}}>17:05</option>
							<option value="17.166667" {{($session[0]->endFri === '17.166667') ? 'Selected' : ''}}>17:10</option>
							<option value="17.25" {{($session[0]->endFri === '17.25') ? 'Selected' : ''}}>17:15</option>
							<option value="17.333333" {{($session[0]->endFri === '17.333333') ? 'Selected' : ''}}>17:20</option>
							<option value="17.416667" {{($session[0]->endFri === '17.416667') ? 'Selected' : ''}}>17:25</option>
							<option value="17.5" {{($session[0]->endFri === '17.5') ? 'Selected' : ''}}>17:30</option>
							<option value="17.583333" {{($session[0]->endFri === '17.583333') ? 'Selected' : ''}} >17:35</option>
							<option value="17.666667" {{($session[0]->endFri ==='17.666667') ? 'Selected' : ''}}>17:40</option>
							<option value="17.75" {{($session[0]->endFri === '17.75') ? 'Selected' : ''}}>17:45</option>
							<option value="17.833333" {{($session[0]->endFri === '17.833333') ? 'Selected' : ''}}>17:50</option>
							<option value="17.916667" {{($session[0]->endFri === '17.916667') ? 'Selected' : ''}}>17:55</option>
							<option value="18.00" {{($session[0]->endFri === '18.00') ? 'Selected' : ''}}>18:00</option>
							<option value="18.083333" {{($session[0]->endFri === '18.083333') ? 'Selected' : ''}}>18:05</option>
							<option value="18.166667" {{($session[0]->endFri === '18.166667') ? 'Selected' : ''}}>18:10</option>
							<option value="18.25" {{($session[0]->endFri === '18.25') ? 'Selected' : ''}}>18:15</option>
							<option value="18.333333" {{($session[0]->endFri === '18.333333') ? 'Selected' : ''}}>18:20</option>
							<option value="18.416667" {{($session[0]->endFri === '18.416667') ? 'Selected' : ''}}>18:25</option>
							<option value="18.5" {{($session[0]->endFri === '18.5') ? 'Selected' : ''}}>17:30</option>
							<option value="18.583333" {{($session[0]->endFri === '18.583333') ? 'Selected' : ''}} >18:35</option>
							<option value="18.666667" {{($session[0]->endFri ==='18.666667') ? 'Selected' : ''}}>18:40</option>
							<option value="18.75" {{($session[0]->endFri === '18.75') ? 'Selected' : ''}}>18:45</option>
							<option value="18.833333" {{($session[0]->endFri === '18.833333') ? 'Selected' : ''}}>18:50</option>
							<option value="18.916667" {{($session[0]->endFri === '18.916667') ? 'Selected' : ''}}>18:55</option>
							<option value="19.00" {{($session[0]->endFri === '19.00') ? 'Selected' : ''}}>19:00</option>
							<option value="19.083333" {{($session[0]->endFri === '19.083333') ? 'Selected' : ''}}>19:05</option>
							<option value="19.166667" {{($session[0]->endFri === '19.166667') ? 'Selected' : ''}}>19:10</option>
							<option value="19.25" {{($session[0]->endFri === '19.25') ? 'Selected' : ''}}>19:15</option>
							<option value="19.333333" {{($session[0]->endFri === '19.333333') ? 'Selected' : ''}}>19:20</option>
							<option value="19.416667" {{($session[0]->endFri === '19.416667') ? 'Selected' : ''}}>19:25</option>
							<option value="19.5" {{($session[0]->endFri === '19.5') ? 'Selected' : ''}}>19:30</option>
							<option value="19.583333" {{($session[0]->endFri === '19.583333') ? 'Selected' : ''}} >19:35</option>
							<option value="19.666667" {{($session[0]->endFri ==='19.666667') ? 'Selected' : ''}}>19:40</option>
							<option value="19.75" {{($session[0]->endFri === '19.75') ? 'Selected' : ''}}>19:45</option>
							<option value="19.833333" {{($session[0]->endFri === '19.833333') ? 'Selected' : ''}}>19:50</option>
							<option value="19.916667" {{($session[0]->endFri === '19.916667') ? 'Selected' : ''}}>19:55</option>
							<option value="20.00" {{($session[0]->endFri === '20.00') ? 'Selected' : ''}}>20:00</option>
							<option value="20.083333" {{($session[0]->endFri === '20.083333') ? 'Selected' : ''}}>20:05</option>
							<option value="20.166667" {{($session[0]->endFri === '20.166667') ? 'Selected' : ''}}>20:10</option>
							<option value="20.25" {{($session[0]->endFri === '20.25') ? 'Selected' : ''}}>20:15</option>
							<option value="20.333333" {{($session[0]->endFri === '20.333333') ? 'Selected' : ''}}>20:20</option>
							<option value="20.416667" {{($session[0]->endFri === '20.416667') ? 'Selected' : ''}}>20:25</option>
							<option value="20.5" {{($session[0]->endFri === '20.5') ? 'Selected' : ''}}>20:30</option>
							<option value="20.583333" {{($session[0]->endFri === '20.583333') ? 'Selected' : ''}} >20:35</option>
							<option value="20.666667" {{($session[0]->endFri ==='20.666667') ? 'Selected' : ''}}>20:40</option>
							<option value="20.75" {{($session[0]->endFri === '20.75') ? 'Selected' : ''}}>20:45</option>
							<option value="20.833333" {{($session[0]->endFri === '20.833333') ? 'Selected' : ''}}>20:50</option>
							<option value="20.916667" {{($session[0]->endFri === '20.916667') ? 'Selected' : ''}}>20:55</option>
							<option value="21.00" {{($session[0]->endFri === '21.00') ? 'Selected' : ''}}>21:00</option>
							<option value="21.083333" {{($session[0]->endFri === '21.083333') ? 'Selected' : ''}}>21:05</option>
							<option value="21.166667" {{($session[0]->endFri === '21.166667') ? 'Selected' : ''}}>21:10</option>
							<option value="21.25" {{($session[0]->endFri === '21.25') ? 'Selected' : ''}}>21:15</option>
							<option value="21.333333" {{($session[0]->endFri === '21.333333') ? 'Selected' : ''}}>21:20</option>
							<option value="21.416667" {{($session[0]->endFri === '21.416667') ? 'Selected' : ''}}>21:25</option>
							<option value="21.5" {{($session[0]->endFri === '21.5') ? 'Selected' : ''}}>21:30</option>
							<option value="21.583333" {{($session[0]->endFri === '21.583333') ? 'Selected' : ''}} >21:35</option>
							<option value="21.666667" {{($session[0]->endFri ==='21.666667') ? 'Selected' : ''}}>21:40</option>
							<option value="21.75" {{($session[0]->endFri === '21.75') ? 'Selected' : ''}}>21:45</option>
							<option value="21.833333" {{($session[0]->endFri === '21.833333') ? 'Selected' : ''}}>21:50</option>
							<option value="21.916667" {{($session[0]->endFri === '21.916667') ? 'Selected' : ''}}>21:55</option>
							<option value="22.00" {{($session[0]->endFri === '22.00') ? 'Selected' : ''}}>22:00</option>
							<option value="22.083333" {{($session[0]->endFri === '22.083333') ? 'Selected' : ''}}>22:05</option>
							<option value="22.166667" {{($session[0]->endFri === '22.166667') ? 'Selected' : ''}}>22:10</option>
							<option value="22.25" {{($session[0]->endFri === '22.25') ? 'Selected' : ''}}>22:15</option>
							<option value="22.333333" {{($session[0]->endFri === '22.333333') ? 'Selected' : ''}}>22:20</option>
							<option value="22.416667" {{($session[0]->endFri === '22.416667') ? 'Selected' : ''}}>22:25</option>
							<option value="22.5" {{($session[0]->endFri === '22.5') ? 'Selected' : ''}}>22:30</option>
							<option value="22.583333" {{($session[0]->endFri === '22.583333') ? 'Selected' : ''}} >22:35</option>
							<option value="22.666667" {{($session[0]->endFri ==='22.666667') ? 'Selected' : ''}}>22:40</option>
							<option value="22.75" {{($session[0]->endFri === '22.75') ? 'Selected' : ''}}>22:45</option>
							<option value="22.833333" {{($session[0]->endFri === '22.833333') ? 'Selected' : ''}}>22:50</option>
							<option value="22.916667" {{($session[0]->endFri === '22.916667') ? 'Selected' : ''}}>22:55</option>
							<option value="23.00" {{($session[0]->endFri === '23.00') ? 'Selected' : ''}}>23:00</option>
							<option value="23.083333" {{($session[0]->endFri === '23.083333') ? 'Selected' : ''}}>23:05</option>
							<option value="23.166667" {{($session[0]->endFri === '23.166667') ? 'Selected' : ''}}>23:10</option>
							<option value="23.25" {{($session[0]->endFri === '23.25') ? 'Selected' : ''}}>23:15</option>
							<option value="23.333333" {{($session[0]->endFri === '23.333333') ? 'Selected' : ''}}>23:20</option>
							<option value="23.416667" {{($session[0]->endFri === '23.416667') ? 'Selected' : ''}}>23:25</option>
							<option value="23.5" {{($session[0]->endFri === '23.5') ? 'Selected' : ''}}>23:30</option>
							<option value="23.583333" {{($session[0]->endFri === '23.583333') ? 'Selected' : ''}} >23:35</option>
							<option value="23.666667" {{($session[0]->endFri ==='23.666667') ? 'Selected' : ''}}>23:40</option>
							<option value="23.75" {{($session[0]->endFri === '23.75') ? 'Selected' : ''}}>23:45</option>
							<option value="23.833333" {{($session[0]->endFri === '23.833333') ? 'Selected' : ''}}>23:50</option>
							<option value="23.916667" {{($session[0]->endFri === '23.916667') ? 'Selected' : ''}}>23:55</option>
						</select>
					</td>
					<td>{{$session[0]->totalFri}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>{{$session[0]->totalHours}}</td>
				</tr>
			</table>
			<div id="submit-button">
				<input type="Submit" name="btnUpdate" value="Update Record" id="btn-submit">
				<a href="/session" id="backRecord"><i class="fa fa-arrow-left"> Back</i></a>
			</div>
		</div>
		</form>
		
	</div>
@endsection