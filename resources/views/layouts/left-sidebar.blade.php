<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><img
                            src=""
                            alt="user-img" class="img-circle"><span
                            class="hide-menu"></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href=""><i class="ti-user"></i> My Profile</a></li>
                        <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>

                <!-- <li class="nav-small-cap">--- DASHBOARD</li> -->
                <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>

                <li class="nav-small-cap">--- Academics</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-user"></i><span class="hide-menu">Applicant</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('saas.applicants.enquiries.index')}}">Applicant Enquiry</a></li>  
                        <li><a href="{{ route('sass.applicant.course-applicant.index') }}">Applicant Registration</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-graduation-cap"></i><span class="hide-menu">TimeTable</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <!-- <li><a href="#">Optional Subject</a></li> -->

                        <li><a href="{{ route('saas.classroom-allocation.manage-building.index') }}">Classroom Allocation</a></li>

                        <li><a href="{{ route('saas.weekday.set-timing.index') }}">Create Weekdays</a></li>

                        <li><a href="{{ route('saas.timetable.institutional-timetable.index') }}">Institutional Timetable</a></li>

                        <li><a href="{{ route('saas.manage-subject.list.index') }}">Manage Subjects</a></li>

                        <li><a href="{{ route('saas.manage-timetable.list.index') }}">Manage Timetables</a></li>

                        <li><a href="{{ route('saas.set-class-timing.index') }}">Set Class timings</a></li>

                        <li><a href="{{ route('saas.teacher-timetable.index') }}">Teacher Timetable</a></li>

                        <li><a href="{{ route('saas.timetable.setting.index') }}">Settings</a></li>
                       
                        <li><a href="{{ route('saas.timetable.swap.index') }}">Timetable Tracker</a></li>
                       
                        <li><a href="{{ route('saas.timetable.view-timetable.index') }}">View Timetables</a></li>
                        
                        <li><a href="{{ route('saas.timetable.work-allotment.index') }}">Work allotment</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-book-open-reader"></i><span class="hide-menu">GradeBook</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="{{ route('saas.grade-book.back-data-import.subject-import.index') }}">Back Data Import</a></li>

                        <li><a href="{{ route('saas.grade-book.exam-management.manage-academic-year.index') }}">Exam Management</a></li>

                        <li><a href="{{ route('saas.grade-book.exam-year-planner.manage-academic-year.index') }}">Exam Year Planner</a></li>

                        <li><a href="{{ route('saas.grade-book.generate-transcript.manage-transcript.index') }}">Generate Transcript</a></li>

                        <li><a href="{{ route('saas.grade-book.generate-transcript-report.index') }}">Generated Transcript Reports</a></li>
                        
                        <li><a href="{{ route('saas.grade-book.student-report.academic-year.index') }}">GradeBook Reports</a></li>
                        
                        <li><a href="{{ route('saas.grade-book.manage-transcript.index') }}">Manage Transcript</a></li>
                        
                        <li><a href="">Settings</a></li>
                        
                        <li><a href="">Transcript Reports Log</a></li>
                        
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-rectangle-list"></i><span class="hide-menu">Setting</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="{{ route('sass.setting.academic-year.index') }}">Academic year</a></li>

                        <li><a href="{{ route('sass.setting.general-setting.index') }}">General Setting</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-print"></i><span class="hide-menu">Bulk Print</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="">ID Card</a></li>
                        <li><a href="">Certificate</a></li>
                        <li><a href="">Payroll Bulk Print</a></li>
                        <li><a href="">Fees invoice Bulk Print</a></li>
                        <li><a href="">Fees Invoice Bulk Print Settings</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-download"></i><span class="hide-menu">Download Center</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Content Type</a></li>

                        <li><a href="">Content List</a></li>

                        <li><a href="">Shared Content List</a></li>

                        <li><a href="">Video List</a></li>

                    </ul>
                </li>

                <li class="nav-small-cap">--- STUDENT</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-user-tie"></i><span class="hide-menu">Student Info</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Student Category</a></li>

                        <li><a href="">Add Student</a></li>

                        <li><a href="">Student List</a></li>


                        <!-- <li><a href="#">Multi Class Student</a></li>
                        <li><a href="#">Delete Student Record</a></li>
                        <li><a href="#">Unassigned Student</a></li> -->


                        <li><a href="">Student Attendance</a>
                        </li>

                        <li><a href="">Subject Wise Attendance</a></li>

                        <li><a href="">Student Group</a></li>

                        <li><a href="">Student Promote</a></li>



                        <li><a href="">Student Export</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-paste"></i><span class="hide-menu">Behaviour Records</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Incidents</a></li>


                        <li><a href="">Assign Incident</a>
                        </li>

                        <li><a href="">Student
                                Incident Report</a></li>


                        <li><a href="">Behaviour Report</a>
                        </li>

                        <li><a href="">Class Section Report</a></li>

                        <li><a href="">Incident Wise Report</a></li>

                       

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa-solid fa-money-bill"></i><span class="hide-menu">Fees</span></a>
                    <ul aria-expanded="false" class="collapse">

                       
                        <li><a href="">Fees Group</a></li>

                        <li><a href="">Fees Type</a></li>

                        <li><a href="">Fees Invoice</a></li>

                        <li><a href="#">Fees Carry Forward</a></li>


                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-book-open"></i><span class="hide-menu">Homework</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Add Homework</a></li>

                        <li><a href="">Homework List</a></li>

                       

                        <li><a href="">Homework Report</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-hotel"></i><span class="hide-menu">Library</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Add Book</a></li>

                        <li><a href="">Book List</a></li>

                        <li><a href="">Book Categories</a></li>

                        <li><a href="">Add Member</a></li>

                        <li><a href="">Issue/Return Book</a></li>

                        <li><a href="">All Issued Book</a></li>

                        <li><a href="">Subject</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-bus"></i><span class="hide-menu">Transport</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Routes</a></li>

                        <li><a href="">Vehicle</a></li>

                        <li><a href="">Assign Vehicle</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-bed"></i><span class="hide-menu">Dormitory</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Room Type</a></li>

                        <li><a href="">Dormitory</a></li>

                        <li><a href="">Dormitory Rooms</a></li>
                    </ul>
                </li>

                <li class="nav-small-cap">---EXAM</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-map"></i><span class="hide-menu">Examination</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Exam Type</a></li>

                        <li><a href="">Exam Setup</a></li>

                        <li><a href="">Exam Schedule</a></li>

                        <li><a href="">Exam Attendance</a></li>

                        <li><a href="">Marks Register</a></li>

                        <li><a href="">Marks Grade</a></li>

                        <li><a href="">Marksheet Report</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-clipboard-list"></i><span class="hide-menu">Exam Plan</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Admit Card</a></li>

                        <li><a href="">Seat Plan</a></li>

                       

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-globe"></i><span class="hide-menu">Online Exam</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Question Group</a></li>

                        <li><a href="">Question Bank</a></li>

                        <li><a href="">Online Exam</a></li>

                    </ul>
                </li>

                <li class="nav-small-cap">---HR</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-users-cog"></i><span class="hide-menu">Human Resource</span></a>
                    <ul aria-expanded="false" class="collapse">


                        <li><a href="">Designation</a></li>

                        <li><a href="">Department</a></li>

                        <li><a href="">Add Staff</a></li>
 
                        <li><a href="">Staff Directory</a></li>
   
                        <li><a href="">Staff Attendance</a>
                        </li>

                        <li><a href="">Payroll</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-star"></i><span class="hide-menu">Teacher Evaluation</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Approved Report</a></li>

                        <li><a href="">Pending Report</a></li>

                        <li><a href="">Teacher Wise Report</a></li>

                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-door-open"></i><span class="hide-menu">Leave</span></a>
                    <ul aria-expanded="false" class="collapse">

                      
                        <li><a href="">Leave Type</a></li>

                        <li><a href="">Leave Define</a></li>

                        <li><a href="">Apply Leave</a></li>

                        <li><a href="">Approve Leave Request</a></li>

                        <li><a href="">Pending Leave Request</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-regular fa-circle-check"></i><span class="hide-menu">Role & Permission</span></a>
                    <ul aria-expanded="false" class="collapse">

                      
                        <li><a href="">Manage Roles</a></li>


                        <li><a href="">Login Permission</a></li>


                    </ul>
                </li>

                <li class="nav-small-cap">---ACCOUNTS</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-wallet"></i><span class="hide-menu">Wallet</span></a>
                    <ul aria-expanded="false" class="collapse">

                       <li><a href="">Wallet</a></li>

                        <li><a href="">Pending Deposit</a></li>

                        <li><a href="">Approve Deposit</a></li>

                        <li><a href="">Reject Deposit</a></li>

                        <li><a href="">Wallet Transaction</a></li>

                        <li><a href="">Refund Request</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-landmark"></i><span class="hide-menu">Accounts</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Profit & Loss</a></li>

                        <li><a href="">Income</a></li>

                        <li><a href="">Expense</a></li>

                        <li><a href="">Chart Of Account</a></li>

                        <li><a href="">Bank Account</a></li>

                        <li><a href="">Fund Transfer</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-box"></i><span class="hide-menu">Inventory</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Item Category</a></li>

                        <li><a href="">Item List</a></li>
  
                        <li><a href="">Item Store</a></li>
   
                        <li><a href="">Supplier</a></li>

                        <li><a href="">Item Receive</a></li>

                        <li><a href="">Item Receive List</a></li>

                        <li><a href="">Item Sell</a></li>

                        <li><a href="">Item Sell List</a></li>

                        <li><a href="">Item Issue</a></li>

                    </ul>
                </li>

               
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-bullhorn"></i><span class="hide-menu">Communicate</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Notice Board</a></li>

                        
                    </ul>
                </li>
               

                <li class="nav-small-cap">---REPORTS</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-users"></i><span class="hide-menu">Student Reports</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Previous Record</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-agenda"></i><span class="hide-menu">Exam Reports</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="">Exam Routine</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-user-tag"></i><span class="hide-menu">Staff Reports</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Staff Attendance Report</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-server"></i><span class="hide-menu">Fees Reports</span></a>
                    <ul aria-expanded="false" class="collapse">

                        
                        <li><a href="">Fees Due Report</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-file-invoice"></i><span class="hide-menu">Accounts Reports</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Payroll Report</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-small-cap">---SETTINGS SECTION</li>
                
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-cogs"></i><span class="hide-menu">General Settings</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="">Student Settings</a>
                        </li>

                    </ul>
                </li>
                
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fas fa-university"></i><span class="hide-menu">Fees Settings</span></a>
                    <ul aria-expanded="false" class="collapse">

                      
                        <li><a href="#">Fees Invoice Settings</a></li>
                    </ul>
                </li>
               
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>