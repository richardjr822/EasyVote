<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyVote - Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/admin/admindashboard.css'])
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <img src="{{ asset('images/whitelogo.png') }}" alt="EasyVote Logo" class="img-fluid">

            <a href="/home" class="menu-item active">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
            <a href="/create" class="menu-item">
                <i class="bi bi-person-plus"></i>
                <span>Create</span>
            </a>
            <a href="/tally" class="menu-item">
                <i class="bi bi-file-earmark-text"></i>
                <span>Tally</span>
            </a>
            <a href="/accounts" class="menu-item">
                <i class="bi bi-people"></i>
                <span>Accounts</span>
            </a>
            <a href="/archives" class="menu-item">
                <i class="bi bi-bookmarks"></i>
                <span>Archives</span>
            </a>
        </div>

        <a href="/logout" class="logout">
            <i class="bi bi-box-arrow-right"></i>
            <span>Log Out</span>
        </a>
    </div>

    <!-- Sidebar Toggle Button (Mobile Only) -->
    <button class="sidebar-toggle d-lg-none">
        <i class="bi bi-list"></i>
    </button>

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="row g-4"> <!-- Added spacing between cards -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="logo-container text-center">
                        <img src="{{ asset('images/STUDENT-COUNCIL.jpg') }}" alt="Student Council" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CCS Student Council</h5>
                        <p class="card-text">Founded in 2013, Gordon College CCS Student Council is a recognized Student Society on Information Technology, Computer Science, and Entertainment and Multimedia Computing.</p>
                        <button class="manage-election-btn btn btn-orange w-100" data-bs-toggle="modal" data-bs-target="#manageElectionModal" 
                                data-logo="{{ asset('images/STUDENT-COUNCIL.jpg') }}" 
                                data-title="CCS Student Council">
                            <i class="bi bi-play-circle"></i> Manage Election
                        </button>
                    </div>
                </div>
            </div>

            <!-- Repeat for other cards -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="logo-container text-center">
                        <img src="{{ asset('images/ELITES.jpg') }}" alt="Elites" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ELITES</h5>
                        <p class="card-text">Founded in 2022, GCCCS ELITES (Empowered League of Information Technology Education Students).</p>
                        <button class="manage-election-btn btn btn-orange w-100" data-bs-toggle="modal" data-bs-target="#manageElectionModal" 
                                data-logo="{{ asset('images/ELITES.jpg') }}" 
                                data-title="ELITES">
                            <i class="bi bi-play-circle"></i> Manage Election
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="logo-container text-center">
                        <img src="{{ asset('images/SPECS.jpg') }}" alt="Specs" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">SPECS</h5>
                        <p class="card-text">The Society of Programming Enthusiasts in Computer Science (SPECS) is an organization under the GCCCS.</p>
                        <button class="manage-election-btn btn btn-orange w-100" data-bs-toggle="modal" data-bs-target="#manageElectionModal" 
                                data-logo="{{ asset('images/SPECS.jpg') }}" 
                                data-title="SPECS">
                            <i class="bi bi-play-circle"></i> Manage Election
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="logo-container text-center">
                        <img src="{{ asset('images/IMAGES.jpg') }}" alt="Images" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">IMAGES</h5>
                        <p class="card-text">The Innovative Multimedia Artists Guild of Empowered Students (IMAGES) is a creatives organization of the GCCCS.</p>
                        <button class="manage-election-btn btn btn-orange w-100" data-bs-toggle="modal" data-bs-target="#manageElectionModal" 
                                data-logo="{{ asset('images/IMAGES.jpg') }}" 
                                data-title="IMAGES">
                            <i class="bi bi-play-circle"></i> Manage Election
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="manageElectionModal" tabindex="-1" aria-labelledby="manageElectionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="background-color: #D9D9D9;height:450px; padding: 20px; width: 1100px;"> <!-- Adjusted height and added padding -->
                <div class="modal-header border-0"> <!-- Removed orange header -->
                    <h5 class="modal-title" id="manageElectionModalLabel">Manage Election</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex">
                    <!-- Left Section -->
                    <div class="left-section d-flex flex-column align-items-center justify-content-center" style="width: 30%;">
                        <div class="logo-circle mb-4"> <!-- Added margin-bottom for spacing -->
                            <img id="modal-logo" src="{{ asset('images/STUDENT-COUNCIL.jpg') }}" alt="Logo" class="img-fluid">
                        </div>
                        <button class="btn btn-orange">
                            View Candidates
                        </button>
                    </div>

                    <!-- Right Section -->
                    <div class="right-section d-flex flex-column justify-content-center align-items-center" style="width: 70%;"> <!-- Centered content -->
                        <form class="w-75">
                            <div class="mb-3 d-flex align-items-center">
                                <label for="startDate" class="form-label me-3" style="width: 100px;">Start Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                                    <input type="date" class="form-control" id="startDate">
                                </div>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="endDate" class="form-label me-3" style="width: 100px;">End Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                                    <input type="date" class="form-control" id="endDate">
                                </div>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="voters" class="form-label me-3" style="width: 100px;">Voters</label>
                                <select class="form-select" id="voters">
                                    <option value="all">All CCS Students</option>
                                    <option value="bsit">BSIT Students</option>
                                    <option value="bscs">BSCS Students</option>
                                    <option value="bsemc">BSEMC Students</option>
                                </select>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center mt-2`` w-100"> <!-- Centered the button -->
                            <button class="btn btn-orange">
                                <i class="bi bi-play-circle"></i> Start Election
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer position-relative">
        <div class="date-time">
            <i class="bi bi-calendar3"></i>
            <span id="current-date-time"></span>
        </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
            document.getElementById('current-date-time').textContent = now.toLocaleDateString('en-US', options);
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const manageElectionModal = document.getElementById('manageElectionModal');
            const modalLogo = document.getElementById('modal-logo');
            const modalTitle = document.getElementById('manageElectionModalLabel');

            manageElectionModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget; // Button that triggered the modal
                const logo = button.getAttribute('data-logo');
                const title = button.getAttribute('data-title');

                // Update modal content
                modalLogo.src = logo;
                modalTitle.textContent = title;
            });
        });
        
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.querySelector('.sidebar');
            const toggleButton = document.querySelector('.sidebar-toggle');

            toggleButton.addEventListener('click', function () {
                sidebar.classList.toggle('collapsed');
            });
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
