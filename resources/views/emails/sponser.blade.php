<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب رعاية جديد - New Sponsorship Request</title>
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
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="2" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1.5" fill="white" opacity="0.08"/><circle cx="50" cy="10" r="1" fill="white" opacity="0.12"/><circle cx="10" cy="50" r="1.2" fill="white" opacity="0.09"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        }

        .sponsor-icon {
            width: 90px;
            height: 90px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 45px;
            backdrop-filter: blur(10px);
            border: 3px solid rgba(255, 255, 255, 0.3);
            animation: goldGlow 3s ease-in-out infinite alternate;
        }

        @keyframes goldGlow {
            0% { 
                box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
                transform: scale(1);
            }
            100% { 
                box-shadow: 0 0 30px rgba(255, 215, 0, 0.6), 0 0 40px rgba(255, 215, 0, 0.3);
                transform: scale(1.05);
            }
        }

        .email-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
            position: relative;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .email-header p {
            font-size: 1.2rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .email-body {
            padding: 40px 30px;
        }

        .vip-alert {
            text-align: center;
            margin-bottom: 35px;
            padding: 30px;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.15) 0%, rgba(255, 193, 7, 0.1) 100%);
            border-radius: 15px;
            border: 3px solid #ffd700;
            position: relative;
            overflow: hidden;
        }

        .vip-alert::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 215, 0, 0.1), transparent);
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(30deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(30deg); }
        }

        .vip-alert h2 {
            color: #d68910;
            font-size: 1.8rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            z-index: 1;
        }

        .vip-alert p {
            color: #b7950b;
            font-size: 1.1rem;
            font-weight: 600;
            position: relative;
            z-index: 1;
        }

        .timestamp {
            background: linear-gradient(135deg, #fff9e6 0%, #fef5d0 100%);
            border: 2px solid rgba(255, 193, 7, 0.3);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .timestamp-label {
            font-size: 0.9rem;
            color: #f39c12;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .timestamp-value {
            font-size: 1.1rem;
            color: #d68910;
            font-weight: 600;
        }

        .sponsor-info {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.08) 0%, rgba(41, 128, 185, 0.05) 100%);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border-left: 5px solid #3498db;
        }

        .section-title {
            color: #2c3e50;
            font-size: 1.7rem;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            width: 100px;
            height: 4px;
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .sponsor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .sponsor-item {
            background: white;
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid #3498db;
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.12);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sponsor-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(52, 152, 219, 0.18);
        }

        .sponsor-item.company {
            border-left-color: #f39c12;
            border-left-width: 6px;
        }

        .sponsor-item.company .sponsor-label {
            color: #f39c12;
        }

        .sponsor-label {
            font-weight: bold;
            color: #3498db;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sponsor-value {
            color: #2c3e50;
            font-size: 1.2rem;
            font-weight: 600;
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
            padding: 30px;
            border-radius: 12px;
            border-left: 4px solid #2ecc71;
            box-shadow: 0 8px 25px rgba(46, 204, 113, 0.12);
            margin-top: 20px;
            position: relative;
        }

        .message-content::before {
            content: '"';
            position: absolute;
            top: -15px;
            left: 25px;
            font-size: 5rem;
            color: #2ecc71;
            opacity: 0.2;
            font-family: serif;
        }

        .message-text {
            font-size: 1.15rem;
            color: #2c3e50;
            line-height: 1.9;
            margin-right: 40px;
            font-style: italic;
            text-align: justify;
        }

        .opportunity-section {
            background: linear-gradient(135deg, rgba(155, 89, 182, 0.1) 0%, rgba(142, 68, 173, 0.05) 100%);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            border: 2px solid rgba(155, 89, 182, 0.2);
            text-align: center;
        }

        .opportunity-highlight {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 4px solid #9b59b6;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }

        .action-btn {
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            font-weight: bold;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .action-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .action-btn:hover::before {
            left: 100%;
        }

        .approve-btn {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
            border: 2px solid #27ae60;
        }

        .approve-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(46, 204, 113, 0.4);
        }

        .negotiate-btn {
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
            color: white;
            border: 2px solid #e67e22;
        }

        .negotiate-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(243, 156, 18, 0.4);
        }

        .contact-btn {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            border: 2px solid #2980b9;
        }

        .contact-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(52, 152, 219, 0.4);
        }

        .decline-btn {
            background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
            color: white;
            border: 2px solid #7f8c8d;
        }

        .decline-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(149, 165, 166, 0.4);
        }

        .stats-section {
            background: linear-gradient(135deg, rgba(243, 156, 18, 0.1) 0%, rgba(230, 126, 34, 0.05) 100%);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 25px;
            border: 2px solid rgba(243, 156, 18, 0.2);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 20px;
            text-align: center;
        }

        .stat-item {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.1);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-2px);
        }

        .stat-number {
            font-size: 2.2rem;
            font-weight: bold;
            color: #f39c12;
            margin-bottom: 8px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .stat-label {
            color: #7f8c8d;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .email-footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .footer-content {
            margin-bottom: 25px;
        }

        .system-info {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 12px;
            margin-top: 20px;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .sponsor-priority {
            background: linear-gradient(135deg, rgba(231, 76, 60, 0.1) 0%, rgba(192, 57, 43, 0.05) 100%);
            border: 2px solid #e74c3c;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
        }

        .priority-text {
            color: #c0392b;
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .priority-sub {
            color: #e74c3c;
            font-size: 0.95rem;
            line-height: 1.5;
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

            .sponsor-grid {
                grid-template-columns: 1fr;
            }

            .email-header h1 {
                font-size: 2rem;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .action-btn {
                width: 100%;
                max-width: 280px;
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
            <div class="sponsor-icon">🤝</div>
            <h1>طلب رعاية جديد!</h1>
            <p>فرصة شراكة وتعاون استراتيجية جديدة</p>
            <div class="decorative-wave"></div>
        </div>

        <div class="email-body">
            <div class="vip-alert">
                <h2>💰 طلب رعاية VIP</h2>
                <p>شركة محتملة تريد أن تصبح شريكاً استراتيجياً - يتطلب رد سريع</p>
            </div>

            <div class="timestamp">
                <div class="timestamp-label">تاريخ ووقت الطلب</div>
                <div class="timestamp-value" id="currentDateTime"></div>
            </div>

            <div class="sponsor-info">
                <h3 class="section-title">معلومات الشركة / الراعي المحتمل</h3>
                <div class="sponsor-grid">
                    <div class="sponsor-item">
                        <div class="sponsor-label">👤 اسم المسؤول</div>
                        <div class="sponsor-value">{{ $name }}</div>
                    </div>
                    <div class="sponsor-item company">
                        <div class="sponsor-label">🏢 اسم الشركة</div>
                        <div class="sponsor-value">{{ $companyname }}</div>
                    </div>
                    <div class="sponsor-item">
                        <div class="sponsor-label">📞 رقم التواصل</div>
                        <div class="sponsor-value">{{ $phone }}</div>
                    </div>
                </div>
                
                <div class="sponsor-priority">
                    <div class="priority-text">🚨 أولوية عالية</div>
                    <div class="priority-sub">طلبات الرعاية تتطلب رداً خلال 24 ساعة لضمان عدم فقدان الفرصة</div>
                </div>
            </div>

            <div class="message-section">
                <h3 class="section-title">تفاصيل طلب الرعاية</h3>
                <div class="message-content">
                    <div class="message-text">{{ $userMessage }}</div>
                </div>
            </div>

            <div class="opportunity-section">
                <h3 class="section-title">فرصة استثمارية</h3>
                <div class="opportunity-highlight">
                    <p style="color: #9b59b6; font-size: 1.1rem; font-weight: 600; margin-bottom: 15px;">
                        💡 نصائح للتعامل مع طلب الرعاية
                    </p>
                    <ul style="text-align: right; color: #7f8c8d; line-height: 1.8;">
                        <li>راجع سجل الشركة وسمعتها في السوق</li>
                        <li>حدد نوع الرعاية والمبلغ المطلوب</li>
                        <li>ناقش الفوائد المتبادلة والعائد على الاستثمار</li>
                        <li>اطلب مقترح رسمي مكتوب</li>
                    </ul>
                </div>
                
                <p style="color: #9b59b6; font-size: 1.1rem; margin-bottom: 20px;">
                    اختر الإجراء المناسب للتعامل مع هذا الطلب
                </p>
                <div class="action-buttons">
                    <a href="tel:{{ $phone }}" class="action-btn contact-btn">
                        📞 اتصال فوري
                    </a>
                    <a href="#" class="action-btn negotiate-btn">
                        💼 بدء المفاوضات
                    </a>
                    <a href="#" class="action-btn approve-btn">
                        ✅ موافقة مبدئية
                    </a>
                    <a href="#" class="action-btn decline-btn">
                        ❌ رفض مؤدب
                    </a>
                </div>
            </div>

            {{-- <div class="stats-section">
                <h3 class="section-title">إحصائيات الرعاية</h3>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">7</div>
                        <div class="stat-label">طلبات الشهر</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">3</div>
                        <div class="stat-label">تحت المراجعة</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">85%</div>
                        <div class="stat-label">معدل النجاح</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">$45K</div>
                        <div class="stat-label">قيمة الشراكات</div>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="email-footer">
            <div class="footer-content">
                <h3>نظام إدارة الشراكات والرعاية</h3>
                <p>تم إرسال هذا الإشعار تلقائياً من نظام طلبات الرعاية</p>
            </div>
            
            <div class="system-info">
                <h4 style="margin-bottom: 15px; color: #f39c12;">معلومات الطلب</h4>
                <div>🏢 الشركة: {{ $companyname }}</div>
                <div>👤 المسؤول: {{ $name }}</div>
                <div>📞 الهاتف: <a href="tel:{{ $phone }}" style="color: #f39c12;">{{ $phone }}</a></div>
                <div>⏰ وقت الإرسال: <span id="serverTime"></span></div>
                <div>🎯 النوع: طلب رعاية / شراكة</div>
                <div style="margin-top: 15px; font-size: 0.85rem; opacity: 0.8;">
                    💼 تذكير: طلبات الرعاية فرص ذهبية - لا تدعها تفوت!
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