<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب تسجيل جديد - New Registration Request</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            line-height: 1.6;
        }

        .email-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            position: relative;
        }

        .email-header {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            padding: 40px 30px;
            text-align: center;
            color: white;
            position: relative;
        }

        .email-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.05"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        }

        .notification-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            53%,
            80%,
            100% {
                transform: translateY(0);
            }

            40%,
            43% {
                transform: translateY(-10px);
            }

            70% {
                transform: translateY(-5px);
            }
        }

        .email-header h1 {
            font-size: 2.3rem;
            margin-bottom: 10px;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        .email-header p {
            font-size: 1.1rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .email-body {
            padding: 40px 30px;
        }

        .alert-section {
            text-align: center;
            margin-bottom: 35px;
            padding: 25px;
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 152, 0, 0.05) 100%);
            border-radius: 15px;
            border-left: 5px solid #ffc107;
        }

        .alert-section h2 {
            color: #e67e22;
            font-size: 1.6rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .alert-section p {
            color: #d68910;
            font-size: 1rem;
            font-weight: 500;
        }

        .timestamp {
            background: #f8fbff;
            border: 2px solid rgba(79, 172, 254, 0.2);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .timestamp-label {
            font-size: 0.9rem;
            color: #4facfe;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .timestamp-value {
            font-size: 1.1rem;
            color: #2c3e50;
            font-weight: 600;
        }

        .participant-info {
            background: #f8fbff;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border: 2px solid rgba(79, 172, 254, 0.1);
        }

        .section-title {
            color: #2c3e50;
            font-size: 1.6rem;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .info-item {
            background: white;
            padding: 20px;
            border-radius: 12px;
            border-left: 4px solid #4facfe;
            box-shadow: 0 5px 15px rgba(79, 172, 254, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(79, 172, 254, 0.15);
        }

        .info-item.important {
            border-left-color: #e74c3c;
            border-left-width: 6px;
        }

        .info-item.important .info-label {
            color: #e74c3c;
        }

        .info-label {
            font-weight: bold;
            color: #4facfe;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-value {
            color: #2c3e50;
            font-size: 1.1rem;
            font-weight: 500;
            word-break: break-word;
        }

        .action-section {
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.1) 0%, rgba(39, 174, 96, 0.05) 100%);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            border: 1px solid rgba(46, 204, 113, 0.2);
            text-align: center;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .action-btn {
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .approve-btn {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
        }

        .approve-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(46, 204, 113, 0.3);
        }

        .reject-btn {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            color: white;
        }

        .reject-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(231, 76, 60, 0.3);
        }

        .review-btn {
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
            color: white;
        }

        .review-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(243, 156, 18, 0.3);
        }

        .stats-section {
            background: linear-gradient(135deg, rgba(155, 89, 182, 0.1) 0%, rgba(142, 68, 173, 0.05) 100%);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 25px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            text-align: center;
        }

        .stat-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(155, 89, 182, 0.1);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #9b59b6;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .email-footer {
            background: #2c3e50;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .footer-content {
            margin-bottom: 20px;
        }

        .system-info {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .email-container {
                margin: 10px;
                border-radius: 15px;
            }

            .email-header,
            .email-body {
                padding: 30px 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .email-header h1 {
                font-size: 1.8rem;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .action-btn {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
        }

        .decorative-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="white"/></svg>') no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <div class="notification-icon">🔔</div>
            <h1>طلب تسجيل جديد!</h1>
            <p>تم استلام طلب تسجيل جديد يحتاج لمراجعتك</p>
            <div class="decorative-wave"></div>
        </div>

        <div class="email-body">
            <div class="alert-section">
                <h2>⚠️ يتطلب إجراء</h2>
                <p>طلب تسجيل جديد في انتظار الموافقة أو الرفض</p>
            </div>

            <div class="timestamp">
                <div class="timestamp-label">تاريخ ووقت التسجيل</div>
                <div class="timestamp-value" id="currentDateTime"></div>
            </div>

            <div class="participant-info">
                <h3 class="section-title">بيانات المتقدم للتسجيل</h3>
                <div class="info-grid">
                    <div class="info-item important">
                        <div class="info-label">👤 الاسم الكامل</div>
                        <div class="info-value">{{ $firstName }} {{ $middleName }} {{ $lastName }}</div>
                    </div>
                    <div class="info-item important">
                        <div class="info-label">📧 البريد الإلكتروني</div>
                        <div class="info-value">{{ $email }}</div>
                    </div>
                    <div class="info-item important">
                        <div class="info-label">📞 رقم الهاتف</div>
                        <div class="info-value">{{ $phone }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">🏢 المنظمة/الشركة</div>
                        <div class="info-value">{{ $organization }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">🌍 البلد</div>
                        <div class="info-value">{{ $country }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">🏙️ المدينة</div>
                        <div class="info-value">{{ $city }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">🛂 رقم الجواز</div>
                        <div class="info-value">{{ $passport }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">🎓 التخصص</div>
                        <div class="info-value">{{ $specialization }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">⚧️ الجنس</div>
                        <div class="info-value">{{ $gender == 'male' ? 'ذكر' : 'أنثى' }}</div>
                    </div>
                </div>
            </div>

            {{-- <div class="action-section">
                <h3 class="section-title">الإجراءات المتاحة</h3>
                <p style="color: #27ae60; font-size: 1.1rem; margin-bottom: 20px;">
                    يرجى مراجعة البيانات واتخاذ الإجراء المناسب
                </p>
                <div class="action-buttons">
                    <a href="#" class="action-btn approve-btn">
                        ✅ الموافقة على الطلب
                    </a>
                    <a href="#" class="action-btn reject-btn">
                        ❌ رفض الطلب
                    </a>
                    <a href="#" class="action-btn review-btn">
                        👁️ عرض التفاصيل
                    </a>
                </div>
            </div> --}}

            {{-- <div class="stats-section">
                <h3 class="section-title">إحصائيات سريعة</h3>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">42</div>
                        <div class="stat-label">طلبات اليوم</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">8</div>
                        <div class="stat-label">في الانتظار</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">156</div>
                        <div class="stat-label">إجمالي الشهر</div>
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- <div class="email-footer">
            <div class="footer-content">
                <h3>نظام إدارة التسجيلات</h3>
                <p>تم إرسال هذا الإشعار تلقائياً من النظام</p>
            </div>

            <div class="system-info">
                <h4 style="margin-bottom: 15px; color: #4facfe;">معلومات النظام</h4>
                <div>🖥️ IP Address: 192.168.1.100</div>
                <div>🌐 User Agent: Web Registration Form</div>
                <div>⏰ Server Time: <span id="serverTime"></span></div>
                <div style="margin-top: 10px; font-size: 0.8rem; opacity: 0.7;">
                    هذا إشعار آلي - لا ترد على هذا الإيميل
                </div>
            </div>
        </div> --}}
    </div>

    <script>
        // عرض الوقت الحالي
        function updateDateTime() {
            const now = new Date();
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                timeZone: 'Africa/Cairo',
                locale: 'ar-EG'
            };

            document.getElementById('currentDateTime').textContent =
                now.toLocaleDateString('ar-EG', options);

            document.getElementById('serverTime').textContent =
                now.toLocaleString('ar-EG', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
        }

        // تحديث الوقت عند تحميل الصفحة
        updateDateTime();

        // تحديث الوقت كل دقيقة
        setInterval(updateDateTime, 60000);
    </script>
</body>

</html>
