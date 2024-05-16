@extends('layouts.app', [
    'activePage' => 'dashbord',
])
@section('content')
    <section id="content">
        <main id="link-wrapper">
            <div class="head-title">
                <div class="left">

                    <h1>لوحة التحكم <i class='fa fa-dashboard'></i></h1>
                    <ul class="breadcrumb">

                        <li>
                            <a href="#">لوحة التحكم</a>

                        </li>
                        <li><i class='fa fa-dashboard'></i></li>
                        <li>

                            <a class="active" href="#">الرئيسية</a>
                        <li><i class='fa fa-home'></i></li>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info" id="link-wrapper">

                <a href="posts.php?do=ManageForegat">
                    <li>
                        <img src="design/images/foregat1.png" alt="s">
                        <span class="text">
                            <h3>1</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="posts.php?do=ManageTeasart">
                    <li>
                        <img src="design/images/tesrt.png" alt="s" class="project_img">
                        <span class="text">
                            <h3>1</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="posts.php?do=ManageProject">
                    <li>
                        <img src="design/images/project.png" alt="s" class="project_img">
                        <span class="text">
                            <h3>2</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="institutions.php?do=Manage">
                    <li>
                        <img src="design/images/inst.jpg" alt="s" class="project_img">
                        <span class="text">
                            <h3>4</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="users.php?do=Manage">
                    <li>
                        <img src="design/images/users.png" alt="s" class="project_img">
                        <span class="text">
                            <h3>11</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="deposits.php?do=Manage">
                    <li>
                        <img src="design/images/deposit.png" alt="s" class="project_img">
                        <span class="text">
                            <h3>2</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="volunteers.php?do=Manage">
                    <li>
                        <img src="design/images/volunteers.png" alt="s" class="project_img">
                        <span class="text">
                            <h3>1</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="employee.php?do=Manage">
                    <li>
                        <img src="design/images/employee.jpg" alt="s" class="project_img">
                        <span class="text">
                            <h3>2</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="status.php?do=Manage">
                    <li>
                        <img src="design/images/statusimg.jfif" alt="s" class="project_img">
                        <span class="text">
                            <h3>3</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
                <a href="deposits_type.php?do=Manage">
                    <li>
                        <img src="design/images/type_don.png" alt="s" class="project_img">
                        <span class="text">
                            <h3>3</h3>
                            <p>تقرير</p>
                        </span>
                    </li>
                </a>
            </ul>
            <div class="table-data">

                <div class="order" style="direction: rtl;">
                    <div class="head">
                        <h3> <i class='fa fa-retweet'></i> العمليات الحديثة </h3>

                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th><i class="fa fa-user"> أسم </i></th>
                                <th><i class="fa fa-money"></i> المبلغ </th>
                                <th><i class="fa fa-hand-lizard-o"></i> المنتج </th>
                                <th><i class="fa fa-calendar"></i> التاريخ</th>
                                <th><i class="fa fa-check-circle"></i> التحكم</th>
                            </tr>

                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <p>اسامة</p>
                                </td>
                                <td>5000</td>
                                <!-- <td><span class="status completed">Completed</span></td> -->
                                <td>ساعة</td>
                                <td>2023-05-22</td>
                                <td><a href="" class="btn btn-primary btn-sm">عرض
                                        البيانات</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>اسامة</p>
                                </td>
                                <td>5000</td>
                                <!-- <td><span class="status completed">Completed</span></td> -->
                                <td>ساعة</td>
                                <td>2023-05-22</td>
                                <td><a href="" class="btn btn-primary btn-sm">عرض
                                        البيانات</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo" style="direction: rtl;">
                    <div class="head">
                        <h3><i class='fa fa-building-o'></i> العمليات</h3>

                        <i class='bx bx-filter'></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>اسم العمليات  </p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>

                        <li class="completed">
                            <p>اسم العمليات  </p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>

                        <li class="completed">
                            <p>اسم العمليات  </p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>

            
                    </ul>
                </div>
        </main>
    </section>
@endsection
