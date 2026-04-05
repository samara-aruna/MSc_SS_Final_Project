# IE5042 Software Security — My Contributions

## Project Overview
The AIS Online Learning Platform is a PHP based web application 
with MySQL database. It provides online learning services to 
multiple user categories including free students, premium students, 
teachers, and parents. The platform includes user authentication, 
course pages, a payment system (Razorpay), profile management 
and file upload functionality.

## Member Details

| Student ID - MS26907970 |

## Vulnerabilities Fixed (sanuja-works branch)

### 1. MD5 Password Hashing
- **File:** update_profilepremium.php
- **Fix:** Replaced md5() with password_hash() using bcrypt (PASSWORD_DEFAULT)
- **OWASP:** A02:2021 Cryptographic Failures

### 2. Hardcoded Credentials
- **Files:** includes/dbh.inc.php, configpremium.php, payscript.php
- **Fix:** Moved all credentials to .env.php config file excluded from version control
- **OWASP:** A05:2021 Security Misconfiguration

### 3. XSS in payscript.php
- **File:** payscript.php
- **Fix:** Applied htmlspecialchars() with ENT_QUOTES and UTF-8 to all POST data
- **OWASP:** A03:2021 Injection

### 4. XSS in Premium Login Pages
- **Files:** loginpremium.php, loginpremiumadvance.php, loginpremiumordinary.php, loginpremiumuniversity.php
- **Fix:** Applied htmlspecialchars() to prevent script injection
- **OWASP:** A03:2021 Injection

### 5. Missing Security Headers
- **File:** .htaccess (new file created)
- **Fix:** Added X-Frame-Options, CSP, X-Content-Type-Options, X-XSS-Protection headers
- **OWASP:** A05:2021 Security Misconfiguration

### 6. Google OAuth Login
- **Files:** google-login.php, google-callback.php, login.php, .env.php
- **Feature:** Added Login with Google button for free student accounts
- **Grant Type:** Authorization Code Grant (OpenID Connect)

## Tools Used
- **Black Box Testing:** OWASP ZAP v2.17.0
- **White Box Testing:** SonarQube for IDE (VS Code)
- **Manual Code Review:** PHP source code reviewed manually to identify hardcoded credentials, MD5 hashing and XSS vulnerabilities