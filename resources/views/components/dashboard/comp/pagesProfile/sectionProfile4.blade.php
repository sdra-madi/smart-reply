<div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
    <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <div class="flex flex-wrap -mx-3">
                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                    <h6 class="mb-0">{{ $title }}</h6>
                </div>
                <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                    </a>
                    <!-- Button trigger modal -->
                    <div class="book">
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 fw-normal" id="exampleModalLabel">
                                            Edit Profile
                                        </h1>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container text-start">
                                            <form action="">
                                                <div style="align-items: center; margin: 10px 0;"
                                                    class="d-flex justify-content-between">
                                                    <div style="position: relative;">
                                                        <label for="">Profile Picture</label>
                                                        <img src="{{ asset('portal/assets-dash/img/profile.jpg') }}"
                                                            alt="" class="border-4 border-red-500"
                                                            style="border-radius: 50%;">
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                        <button type="button" class="btn btn-success">Upload</button>
                                                    </div>
                                                </div>
                                                <div class="mt-2 mb-2">
                                                    <label for="">User Name</label>
                                                    <input type="text" placeholder="UserName" class="form-control">
                                                </div>
                                                <div class="mt-2 mb-2">
                                                    <label for="">Full Name</label>
                                                    <input type="text" placeholder="Full Name" class="form-control">
                                                </div>
                                                <div class="mt-2 mb-2">
                                                    <label for="">Description</label>
                                                    <textarea name="" id="" cols="20" rows="5" type="text" placeholder="Description"
                                                        class="form-control"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                            close
                                        </button>
                                        <button type="button" class="btn btn-success">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-target="tooltip"
                        class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" role="tooltip">
                        Edit Profile
                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                            data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto pl-4 pr-4">
            <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
            <ul class=" p-0 m-0 rounded-lg">
                <div>
                    <ul>
                        <li class="py-3">
                            <strong>Full Name:</strong> {{ $fullName }}
                        </li>
                        <li class="py-3">
                            <strong>Mobile:</strong> {{ $mobile }}
                        </li>
                        <li class="py-3">
                            <strong>Email:</strong> {{ $email }}
                        </li>
                        <li class="py-3">
                            <strong>Description:</strong><br> {{ $bio }}
                        </li>
                    </ul>
                </div>

            </ul>
        </div>
    </div>
</div>
