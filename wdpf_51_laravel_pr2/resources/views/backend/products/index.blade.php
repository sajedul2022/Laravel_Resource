@extends('backend.layouts.app');

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Projects</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total 95 projects.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                            data-bs-toggle="dropdown"><em
                                                class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered
                                                By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>Open</span></a></li>
                                                <li><a href="#"><span>Closed</span></a></li>
                                                <li><a href="#"><span>Onhold</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-block-tools-opt d-none d-sm-block">
                                    <a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                            Project</span></a>
                                </li>
                                <li class="nk-block-tools-opt d-block d-sm-none">
                                    <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <table class="nk-tb-list is-separate nk-tb-ulist">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-all">
                                <label class="custom-control-label" for="pid-all"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Project Name</span></th>
                        <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Client</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Project Lead</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Team</span></th>
                        <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Progress</span></th>
                        <th class="nk-tb-col tb-col-sm"><span class="sub-text">Deadline</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">
                            <div class="dropdown">
                                <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle me-n1"
                                    data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As
                                                    Done</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As
                                                    Archive</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove
                                                    Projects</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </th>
                    </tr><!-- .nk-tb-item -->
                </thead>
                <tbody>
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-01">
                                <label class="custom-control-label" for="pid-01"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                <div class="project-info">
                                    <h6 class="title">Dashlite Development</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Softnio</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Abu Bin Istiak</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-blue"><img src="/assets/images/avatar/b-sm.jpg"
                                            alt=""></div>
                                </li>
                                <li>
                                    <div class="user-avatar bg-light sm"><span>+12</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Open</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="93.5"></div>
                                </div>
                                <div class="project-progress-percent">93.5%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-warning"><em class="icon ni ni-clock"></em><span>5 Days
                                    Left</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-02">
                                <label class="custom-control-label" for="pid-02"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-warning"><span>RW</span></div>
                                <div class="project-info">
                                    <h6 class="title">Redesign Website</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Runnergy</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Alex Ashley</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/c-sm.jpg"
                                            alt=""></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-blue"><span>N</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Onhold</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="23"></div>
                                </div>
                                <div class="project-progress-percent">23%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-light text-gray"><em class="icon ni ni-clock"></em><span>21
                                    Days Left</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-03">
                                <label class="custom-control-label" for="pid-03"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-info"><span>KR</span></div>
                                <div class="project-info">
                                    <h6 class="title">Keyword Research for SEO</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Techyspec</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Emily Smith</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/a-sm.jpg"
                                            alt=""></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Ongoing</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="52.5"></div>
                                </div>
                                <div class="project-progress-percent">52.5%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-danger"><em class="icon ni ni-clock"></em><span>Due
                                    Tomorrow</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-04">
                                <label class="custom-control-label" for="pid-04"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-danger"><span>WD</span></div>
                                <div class="project-info">
                                    <h6 class="title">Website Development</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Fitness Next</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Michael Wood</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-blue"><span>N</span></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/c-sm.jpg"
                                            alt=""></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Open</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="65.5"></div>
                                </div>
                                <div class="project-progress-percent">65.5%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-light text-gray"><em class="icon ni ni-clock"></em><span>16
                                    Days Left</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-05">
                                <label class="custom-control-label" for="pid-05"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-blue"><span>SO</span></div>
                                <div class="project-info">
                                    <h6 class="title">SEO Optimization</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Techyspec</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Emily Smith</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/a-sm.jpg"
                                            alt=""></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/d-sm.jpg"
                                            alt=""></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Closed</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="100"></div>
                                </div>
                                <div class="project-progress-percent">100%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-success"><em
                                    class="icon ni ni-clock"></em><span>Done</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                <div class="project-info">
                                    <h6 class="title">Dashlite Development</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Softnio</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Abu Bin Istiak</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-danger"><span>D</span></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/c-sm.jpg"
                                            alt=""></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Open</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="65.5"></div>
                                </div>
                                <div class="project-progress-percent">65.5%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-warning"><em class="icon ni ni-clock"></em><span>5 Days
                                    Left</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-07">
                                <label class="custom-control-label" for="pid-07"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-danger"><span>WD</span></div>
                                <div class="project-info">
                                    <h6 class="title">Website Development</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Fitness Next</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Alex Ashley</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/b-sm.jpg"
                                            alt=""></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-indigo"><span>P</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Open</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="65.5"></div>
                                </div>
                                <div class="project-progress-percent">65.5%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-light text-gray"><em class="icon ni ni-clock"></em><span>21
                                    Days Left</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-08">
                                <label class="custom-control-label" for="pid-08"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <a href="html/apps-kanban.html" class="project-title">
                                <div class="user-avatar sq bg-warning"><span>RW</span></div>
                                <div class="project-info">
                                    <h6 class="title">Redesign Website</h6>
                                </div>
                            </a>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Runnergy</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>Michael Wood</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-pink"><span>I</span></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-primary"><img src="/assets/images/avatar/a-sm.jpg"
                                            alt=""></div>
                                </li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-xxl">
                            <span>Onhold</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <div class="project-list-progress">
                                <div class="progress progress-pill progress-md bg-light">
                                    <div class="progress-bar" data-progress="23"></div>
                                </div>
                                <div class="project-progress-percent">23%</div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="badge badge-dim bg-light text-gray"><em class="icon ni ni-clock"></em><span>21
                                    Days Left</span></span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em
                                                            class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                            Project</span></a></li>
                                                <li><a href="#"><em
                                                            class="icon ni ni-check-round-cut"></em><span>Mark As
                                                            Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                </tbody>
            </table><!-- .nk-tb-list -->
            <div class="card">
                <div class="card-inner">
                    <div class="nk-block-between-md g-3">
                        <div class="g">
                            <ul class="pagination justify-content-center justify-content-md-start">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul><!-- .pagination -->
                        </div>
                        <div class="g">
                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                <div>Page</div>
                                <div>
                                    <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                        <option value="page-1">1</option>
                                        <option value="page-2">2</option>
                                        <option value="page-4">4</option>
                                        <option value="page-5">5</option>
                                        <option value="page-6">6</option>
                                        <option value="page-7">7</option>
                                        <option value="page-8">8</option>
                                        <option value="page-9">9</option>
                                        <option value="page-10">10</option>
                                        <option value="page-11">11</option>
                                        <option value="page-12">12</option>
                                        <option value="page-13">13</option>
                                        <option value="page-14">14</option>
                                        <option value="page-15">15</option>
                                        <option value="page-16">16</option>
                                        <option value="page-17">17</option>
                                        <option value="page-18">18</option>
                                        <option value="page-19">19</option>
                                        <option value="page-20">20</option>
                                    </select>
                                </div>
                                <div>OF 102</div>
                            </div>
                        </div><!-- .pagination-goto -->
                    </div><!-- .nk-block-between -->
                </div><!-- .card-inner -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
@endsection
