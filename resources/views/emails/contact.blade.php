<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسالة تواصل جديدة - New Contact Message</title>
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
            max-width: 750px;
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

        .message-icon {
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
            animation: shake 2s infinite;
        }

        @keyframes shake {
            0%, 50%, 100% { transform: rotate(0deg); }
            10%, 30% { transform: rotate(-3deg); }
            20%, 40% { transform: rotate(3deg); }
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

        .priority-alert {
            text-align: center;
            margin-bottom: 35px;
            padding: 25px;
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.15) 0%, rgba(41, 128, 185, 0.1) 100%);
            border-radius: 15px;
            border-left: 5px solid #3498db;
        }

        .priority-alert h2 {
            color: #2980b9;
            font-size: 1.6rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .priority-alert p {
            color: #3498db;
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

        .sender-info {
            background: linear-gradient(135deg, rgba(231, 76, 60, 0.08) 0%, rgba(192, 57, 43, 0.05) 100%);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border-left: 5px solid #e74c3c;
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

        .sender-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .sender-item {
            background: white;
            padding: 20px;
            border-radius: 12px;
            border-left: 4px solid #e74c3c;
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sender-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(231, 76, 60, 0.15);
        }

        .sender-label {
            font-weight: bold;
            color: #e74c3c;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sender-value {
            color: #2c3e50;
            font-size: 1.1rem;
            font-weight: 500;
            word-break: break-word;
        }

        .message-section {
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.08) 0%, rgba(39, 174, 96, 0.05) 100%);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border-left: 5px solid #2ecc71;
        }

        .message-content {
            background: white;
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid #2ecc71;
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.1);
            margin-top: 20px;
            position: relative;
        }

        .message-content::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 4rem;
            color: #2ecc71;
            opacity: 0.3;
            font-family: serif;
        }

        .message-text {
            font-size: 1.1rem;
            color: #2c3e50;
            line-height: 1.8;
            margin-right: 30px;
            font-style: italic;
        }

        .action-section {
            background: linear-gradient(135deg, rgba(155, 89, 182, 0.1) 0%, rgba(142, 68, 173, 0.05) 100%);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            border: 1px solid rgba(155, 89, 182, 0.2);
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

        .reply-btn {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
        }

        .reply-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(52, 152, 219, 0.3);
        }

        .archive-btn {
            background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
            color: white;
        }

        .archive-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(149, 165, 166, 0.3);
        }

        .priority-btn {
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
            color: white;
        }

        .priority-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(243, 156, 18, 0.3);
        }

        .stats-section {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.1) 0%, rgba(41, 128, 185, 0.05) 100%);
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
            box-shadow: 0 3px 10px rgba(52, 152, 219, 0.1);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #3498db;
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

        .contact-warning {
            background: rgba(241, 196, 15, 0.1);
            border: 2px solid #f1c40f;
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            text-align: center;
        }

        .contact-warning-text {
            color: #f39c12;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .contact-warning-sub {
            color: #e67e22;
            font-size: 0.9rem;
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

            .sender-grid {
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
            <div class="message-icon">💬</div>
            <h1>رسالة تواصل جديدة!</h1>
            <p>تم استلام رسالة جديدة من موقع التواصل</p>
            <div class="decorative-wave"></div>
        </div>

        <div class="email-body">
            <div class="priority-alert">
                <h2>📨 رسالة واردة</h2>
                <p>رسالة تواصل جديدة تحتاج لمراجعتك والرد عليها</p>
            </div>

            <div class="timestamp">
                <div class="timestamp-label">تاريخ ووقت الإرسال</div>
                <div class="timestamp-value" id="currentDateTime"></div>
            </div>

            <div class="sender-info">
                <h3 class="section-title">معلومات المرسل</h3>
                <div class="sender-grid">
                    <div class="sender-item">
                        <div class="sender-label">👤 الاسم</div>
                        <div class="sender-value">{{ $name }}</div>
                    </div>
                    <div class="sender-item">
                        <div class="sender-label">📧 البريد الإلكتروني</div>
                        <div class="sender-value">{{ $email }}</div>
                    </div>
                    <div class="sender-item">
                        <div class="sender-label">📞 رقم الهاتف</div>
                        <div class="sender-value">{{ $phone }}</div>
                    </div>
                </div>
                
                <div class="contact-warning">
                    <div class="contact-warning-text">⚠️ تذكير مهم</div>
                    <div class="contact-warning-sub">يُنصح بالرد على الرسالة خلال 24 ساعة لضمان أفضل خدمة عملاء</div>
                </div>
            </div>

            <div class="message-section">
                <h3 class="section-title">محتوى الرسالة</h3>
                <div class="message-content">
                    <div class="message-text">{{ $userMessage }}</div>
                </div>
            </div>

            <div class="action-section">
                <h3 class="section-title">الإجراءات المتاحة</h3>
                <p style="color: #9b59b6; font-size: 1.1rem; margin-bottom: 20px;">
                    اختر الإجراء المناسب للتعامل مع هذه الرسالة
                </p>
                <div class="action-buttons">
                    <a href="mailto:{{ $email }}?subject=رد على استفسارك&body=مرحباً {{ $name }}،%0A%0Aشكراً لتواصلك معنا..." class="action-btn reply-btn">
                        📧 الرد بالإيميل
                    </a>
                    <a href="tel:{{ $phone }}" class="action-btn priority-btn">
                        📞 اتصال هاتفي
                    </a>
                    {{-- <a href="#" class="action-btn archive-btn">
                        📁 أرشفة الرسالة
                    </a> --}}
                </div>
            </div>

            {{-- <div class="stats-section">
                <h3 class="section-title">إحصائيات الرسائل</h3>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">15</div>
                        <div class="stat-label">رسائل اليوم</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">3</div>
                        <div class="stat-label">لم يُرد عليها</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">89</div>
                        <div class="stat-label">إجمالي الشهر</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">معدل الرد</div>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="email-footer">
            <div class="footer-content">
                <h3>نظام إدارة الرسائل</h3>
                <p>تم إرسال هذا الإشعار تلقائياً من نظام التواصل</p>
            </div>
            
            <div class="system-info">
                <h4 style="margin-bottom: 15px; color: #4facfe;">معلومات النظام</h4>
                <div>🖥️ IP Address: 192.168.1.100</div>
                <div>🌐 Source: Contact Form</div>
                <div>⏰ Server Time: <span id="serverTime"></span></div>
                <div>🔗 Reply Link: <a href="mailto:{{ $email }}" style="color: #4facfe;">{{ $email }}</a></div>
                <div style="margin-top: 10px; font-size: 0.8rem; opacity: 0.7;">
                    هذا إشعار آلي - يمكنك الرد مباشرة على المرسل
                </div>
            </div>
        </div>
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