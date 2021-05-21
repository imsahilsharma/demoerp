<!DOCTYPE HTML>
<html>
	<head>
		<title>RCSS - Fee Structure</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
                <header id="header">
						<h1><a href="/StaffHome">RCSS</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="/StaffHome">Home</a></li>
											<li><a href="/ManageStud">Student</a></li>
											<li><a href="/ManageFee">Fees Structure</a></li>
											<li><a href="/StfViewPay">Payment</a></li>
											<li><a href="/StaffPrintRep">Report</a></li>
											<li><hr></li>
											<li><a href="/logout">Logout</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header style="background: linear-gradient(90deg, #1CB5E0 0%, #000851 100%);">
							<h2>Fee Structures</h2>
							<p>Rajagiri College of Social Sciences(Autonomous)</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
							<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>STAFF ID</th>
													<th>G LEVEL</th>
													<th>COURSE</th>
													<th>COURSE FEE</th>
													<th>TUTION FEE</th>
													<th>VAEP FEE</th>
													<th>TOTAL</th>
												</tr>
											</thead>
											<tbody>
											@foreach($fees as $fee)
												<tr>
													<td>{{ $fee->staffid }}</td>
													<td>{{ $fee->glevel }}</td>
													<td>{{ $fee->course }}</td>
													<td>{{ $fee->coursefee }}</td>
													<td>{{ $fee->tutionfee }}</td>
													<td>{{ $fee->vaepfee }}</td>
													<td>{{ $fee->total }}</td>
													<td><a href="/feedetail/{{$fee->id}}/del" style="color: #ff1a1a;">Delete</a></td>
													
												</tr>
											@endforeach
											</tbody>											
										</table>
									</div>
					
								<div style="text-align: center;">
									<br>
									<a href="/AddFee" class="button primary" style="background: #003366; font-size: 16px;">
									Add New Fee Structure</a>
								</div>
					
								</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>