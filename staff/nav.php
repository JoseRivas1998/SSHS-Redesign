<style>
	#nav {
		list-style-type: none;
		text-align: center;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 0;
	}
	#nav > li {
		display: inline-block;
	}
	#nav > li > a {
		padding: 10px 10px 10px 10px;
		background-color: rgb(18,138,165);
		color: white;
		border: teal;
		border-radius: 5px;
	    line-height: 40px;
	    -webkit-transition: all .25s; /* Safari */
	    transition: all .25s;
	}
	#nav > li > a:hover {
    	background-color: rgb(11,89,107);
    	text-decoration: none;
	}
	#nav > li > a.active {
    	background-color: rgb(11,89,107);
	}
</style>

<ul id="nav">
	<li><a href="/staff/teachers/" id="teach">Teachers</a></li>
	<li><a href="/staff/administrators/" id="admin">Administrators</a></li>
	<li><a href="/staff/supportstaff/" id="supportStaff">Support Staff</a></li>
</ul>
