<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
	<a href="index" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
		<h2 class="m-0"> <img src="img/prince-logo.png" width="90px" alt="Prince Education"> Prince Education</h2>
	</a>
	<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto p-4 p-lg-0">
			<a href="index" class="nav-item nav-link <?= ($activePage == 'index') ? 'active' : ''; ?>">Home</a>

			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle <?= ($activePage == 'about' || $activePage == 'teacher') ? 'active' : ''; ?>" data-bs-toggle="dropdown">About</a>
				<div class="dropdown-menu bg-light m-0">
					<a href="about" class="dropdown-item <?= ($activePage == 'about') ? 'active' : ''; ?>">About Us</a>
					<a href="teacher" class="dropdown-item <?= ($activePage == 'teacher') ? 'active' : ''; ?>">Teacher's List</a>
				</div>
			</div>

			<div class="nav-item dropdown">
				<a href="javascript:void(0)" class="nav-link dropdown-toggle <?= ($activePage == 'result' || $activePage == 'exam-routine' ||  $activePage == 'class-routine' || $activePage == 'annual-events' || $activePage == 'attendance' || $activePage == 'sports') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Academic</a>
				<div class="dropdown-menu bg-light m-0">
					<a href="result" class="dropdown-item <?= ($activePage == 'result') ? 'active' : ''; ?>">Results</a>
					<a href="exam-routine" class="dropdown-item <?= ($activePage == 'exam-routine') ? 'active' : ''; ?>">Exam Routine</a>
					<a href="class-routine" class="dropdown-item <?= ($activePage == 'class-routine') ? 'active' : ''; ?>">Class Routine</a>
					<a href="annual-events" class="dropdown-item <?= ($activePage == 'annual-events') ? 'active' : ''; ?>">Annual Events</a>
					<a href="attendance" class="dropdown-item <?= ($activePage == 'attendance') ? 'active' : ''; ?>">Attendance</a>
					<a href="sports" class="dropdown-item <?= ($activePage == 'sports') ? 'active' : ''; ?>">Sports</a>
				</div>
			</div>


			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle <?= ($activePage == 'diploma-engineering' || $activePage == 'medical-diploma' || $activePage == 'medical-assistant' || $activePage == 'diploma-nursing' || $activePage == 'online-admin' || $activePage == 'view-course') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Admission</a>
				<div class="dropdown-menu bg-light m-0">
					<a href="diploma-engineering" class="dropdown-item <?= ($activePage == 'diploma-engineering') ? 'active' : ''; ?>">Diploma In Engineering</a>
					<a href="medical-diploma" class="dropdown-item <?= ($activePage == 'medical-diploma') ? 'active' : ''; ?>">Medical Diploma</a>
					<a href="medical-assistant" class="dropdown-item <?= ($activePage == 'medical-assistant') ? 'active' : ''; ?>">Medical Assistant</a>
					<a href="diploma-nursing" class="dropdown-item <?= ($activePage == 'diploma-nursing') ? 'active' : ''; ?>">Diploma In Nursing & Midwifery</a>
					<a href="online-admin" class="dropdown-item <?= ($activePage == 'online-admin') ? 'active' : ''; ?>">Online Admission</a>
				</div>
			</div>


			<a href="short-course" class="nav-item nav-link <?= ($activePage == 'short-course') ? 'active' : ''; ?>">Short Courses</a>
			<a href="gallery" class="nav-item nav-link <?= ($activePage == 'gallery') ? 'active' : ''; ?>">Gallery</a>
			<a href="project" class="nav-item nav-link <?= ($activePage == 'project') ? 'active' : ''; ?>">IGA Projects</a>
			<a href="blog" class="nav-item nav-link <?= ($activePage == 'blog' || $activePage == 'view-news') ? 'active' : ''; ?>">News</a>
			<a href="contact" class="nav-item nav-link <?= ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
		</div>
		<!--   <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>-->
	</div>
</nav>