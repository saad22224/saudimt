<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مؤتمر السياحة العلاجية</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
            line-height: 1.6;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #2c5aa0 0%, #1e4078 100%);
            color: white;
            padding: 30px 40px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 24px;
            margin-bottom: 8px;
        }
        
        .header p {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .content {
            padding: 40px;
        }
        
        .greeting {
            font-size: 18px;
            color: #2c5aa0;
            margin-bottom: 20px;
        }
        
        .message {
            color: #555;
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .event-details {
            background-color: #f8f9ff;
            border-left: 4px solid #2c5aa0;
            padding: 20px;
            margin: 30px 0;
            border-radius: 8px;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 16px;
        }
        
        .detail-item:last-child {
            margin-bottom: 0;
        }
        
        .icon {
            font-size: 20px;
            margin-left: 12px;
            color: #2c5aa0;
            width: 30px;
        }
        
        .note {
            background-color: #fff9e6;
            border: 1px solid #f0d000;
            padding: 15px;
            border-radius: 6px;
            margin: 20px 0;
            color: #856404;
        }
        
        .contact-info {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
        }
        
        .footer {
            background-color: #f8f9fa;
            padding: 25px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        
        .signature {
            margin-top: 30px;
            color: #2c5aa0;
            font-weight: 600;
        }
        
        @media (max-width: 640px) {
            .container {
                margin: 10px;
                border-radius: 8px;
            }
            
            .header, .content {
                padding: 25px;
            }
            
            .detail-item {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🏥 مؤتمر السياحة العلاجية الدولي</h1>
            <p>International Medical Tourism Conference</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                مرحباً {{ $firstName ?? 'العضو الكريم' }} {{ $middleName ?? '' }} {{ $lastNameName ?? '' }}،
            </div>
            
            <div class="message">
                شكراً لانضمامك إلى المؤتمر الدولي للسياحة العلاجية الذي تنظمه جمعية السياحة العلاجية.<br><br>
                
                يسعدنا مشاركتك معنا في هذا الحدث المميز الذي يجمع نخبة الخبراء والمتخصصين في مجالات الصحة والسياحة.
            </div>
            
            <div class="event-details">
                <div class="detail-item">
                    <span class="icon">📅</span>
                    <strong>تاريخ المؤتمر:</strong>&nbsp;&nbsp;٦ - ٨ سبتمبر ٢٠٢٥
                </div>
                
                <div class="detail-item">
                    <span class="icon">📍</span>
                    <strong>المكان:</strong>&nbsp;&nbsp;فندق الإنتركونتيننتال - الطائف
                </div>
            </div>
            
            <div class="note">
                📋 سنرسل لك قريباً كافة التفاصيل المتعلقة بجدول الفعاليات وطريقة الحضور.
            </div>
            
            <div class="contact-info">
                إذا كانت لديك أي استفسارات، لا تتردد في التواصل معنا عبر:<br>
                <strong>admin@saudimt2025.com</strong>
            </div>
            
            <div class="signature">
                بانتظار لقائك،<br>
                فريق المؤتمر الدولي للسياحة العلاجية
            </div>
        </div>
        
        <div class="footer">
            <p><strong>International Medical Tourism Conference Team</strong></p>
            <p>Thank you for registering • September 6-8, 2025 • Intercontinental Hotel, Taif</p>
        </div>
    </div>
</body>
</html>