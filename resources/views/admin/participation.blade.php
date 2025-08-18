<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم الإدارية</title>
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- الشريط الجانبي -->
    @include('admin.sidebar')


    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 42px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #e74c3c;
        }

        input:checked+.slider:before {
            transform: translateX(18px);
        }
    </style>
    <!-- المحتوى الرئيسي -->
    <main class="main-content">
        <!-- الهيدر العلوي -->
        @include('admin.header')

        <div class="page-content" id="users">
            <div class="page-header">
                <h2>إدارة المسجلين</h2>
                {{-- <button class="btn btn-primary" onclick="showAddUserModal()">
                    <i class="fas fa-plus"></i>
                    إضافة متحدث
                </button> --}}
            </div>

            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="البحث في المستخدمين..." id="userSearch">
            </div>

            <div class="table-container" style="overflow-x: auto">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>الاسم  </th>
                            <th>البريد الإلكتروني</th>
                            <th>الهاتف</th>
                            <th> المؤسسة</th>
                            <th>رقم الباسبور</th>
                            <th>الدولة</th>
                            <th>المدينة </th>
                            <th>التخصص </th>
                            <th>النوع </th>
                        </tr>
                    </thead>
                    <tbody id="usersTableBody">
                        @foreach ($participations as $participation)
                            <tr>
                             
                               

                                <td>{{ $participation->first_name  .  $participation->middle_name  . $participation->last_name }}</td>
                                <td>{{ $participation->email }}</td>
                                <td>{{ $participation->phone }}</td>
                                <td>{{ $participation->organization }}</td>
                                <td>{{ $participation->passport }}</td>
                                <td>{{ $participation->country }}</td>
                                <td>{{ $participation->city }}</td>
                                <td>{{ $participation->specialization }}</td>
                                <td>{{ $participation->gender }}</td>

                                <td>
                                    <!-- زر تعديل -->
                                 

                              

                                    <!-- زر حذف -->
                                    <form action="{{ route('admin.deleteparticipation', $participation->id) }}" method="post"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-action delete" onclick="deleteUser(1)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>


                                 
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
















        <div class="modal" id="addUserModal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>إضافة مستخدم جديد</h3>
                    <button class="modal-close" onclick="closeModal('addUserModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('speakers.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>الاسم عربي</label>
                            <input name="name_ar" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>الاسم انجليزي</label>
                            <input name="name_en" type="text" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label>الصوره</label>
                            <input name="image" type="file" class="form-control" >
                        </div>
                       
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary"
                                onclick="closeModal('addUserModal')">إلغاء</button>
                            <button class="btn btn-primary">إضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </main>


    <script src="{{ asset('admin/script.js') }}"></script>

    <script>
        function toggleBlockUser(userId, isBlocked) {
               const status = isBlocked ? 1 : 0;


            fetch(`/userstatus/${userId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // حماية CSRF
                    },
                    body: JSON.stringify({
                        status: status
                    })
                })
                .then(res => {
                    if (!res.ok) throw new Error("HTTP error " + res.status);
                    return res.json();
                })
                .then(data => {
                    alert(data.message ?? `تم ${status ? 'ترقية' : 'إلغاء ترقية'} المستخدم بنجاح`);
                })
                .catch(err => {
                    console.error(err);
                    alert("حدث خطأ أثناء تغيير حالة المستخدم");
                });
        }
    </script>

</body>

</html>
