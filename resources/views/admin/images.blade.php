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
                <h2>إدارة  معرض الصور </h2>
                <button class="btn btn-primary" onclick="showAddbannerModal()">
                    <i class="fas fa-plus"></i>
                    إضافة  صوره جديده
                </button>
            </div>

            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="البحث في بانرات..." id="userSearch">
            </div>

            <div class="table-container" style="overflow-x: auto">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>صورة </th>
                            <th>العنوان عربي </th>
                            <th>العنوان انجليزي </th>

                            
                            <th>تاريخ الإنشاء</th>

                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody id="usersTableBody">
                        @foreach ($images as $image)
                            <tr>
                                <td>
                                    <img src="{{ asset($image->image) }}" alt="صورة الهوية الأمامية"
                                        style="width: 120px; height: auto; border-radius: 8px; object-fit: cover; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);">
                                </td>
                                {{-- <td>
                                    <img src="{{ asset($user->national_id_back) }}" alt="صورة الهوية الخلفية"
                                        style="width: 120px; height: auto; border-radius: 8px; object-fit: cover; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);">
                                </td> --}}

                                <td>{{ $image->title_ar }}</td>
                                <td>{{ $image->title_en }}</td>
                                {{-- <td>{{ $user->balance }}</td> --}}
                                <td>{{ $image->created_at }}</td>

                                <td>
                                 
                                    <!-- زر حذف -->
                                    <form action="{{ route('admin.deleteimage', $image->id) }}" method="post"
                                        style="display:inline;"  >
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-action delete" onclick="return  confirm('هل تريد  حذف هذا البانر')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                    <!-- سويتش الحظر -->
                                   
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
















        <div class="modal" id="AddbannerModal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>إضافة صورة جديدة</h3>
                    <button class="modal-close" onclick="closeModal('AddbannerModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>عنوان الصورة عربي</label>
                            <input name="title_ar" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>عنوان الصورة انجليزي</label>
                            <input name="title_en" type="text" class="form-control" required>
                        </div>
                      
                       
                        <div class="form-group">
                            <label>صورة </label>
                            <input name="image" type="file" class="form-control" accept="image/*" required
                                onchange="previewBannerImage(event)">
                        </div>

                        <!-- عرض الصورة -->
                        <div class="form-group" style="margin-top:10px;">
                            <img id="bannerPreview" src="" alt="معاينة البانر"
                                style="max-width: 100%; display: none; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                onclick="closeModal('AddbannerModal')">إلغاء</button>
                            <button type="submit" class="btn btn-primary">إضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function previewBannerImage(event) {
                const input = event.target;
                const preview = document.getElementById('bannerPreview');

                if (input.files && input.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>








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
