# 🍴 UniEats – University Cafeteria Food Ordering System

**Live Website:** [https://unieats.co.za](https://unieats.co.za)  
**GitHub Repository:** [Final-Year-Project-Food-Delivery-App](https://github.com/Stan1542/Final-Year-Project-Food-Develivey-App)

---

## 📖 Overview

**UniEats** is a web-based food ordering and delivery system developed for **North-West University (NWU)**. The platform helps students, staff, and visitors order meals from the campus cafeteria online, avoiding long queues and improving convenience. It integrates ordering, staff meal management, and delivery tracking into a seamless workflow.

---

## 🧩 System Architecture (Three-Tier)

UniEats is designed with a **three-tier architecture**:

### 1. **User Portal**
- Register and log in using **OTP-based two-step verification**
- Browse menus, customize meals, and place orders
- Set **on-campus delivery address**
- View **order history**, status, and receipts

### 2. **Cafeteria Staff System**
- Update menu items (prices, descriptions, images)
- View incoming orders with details
- Update order statuses: `Pending → Cooking → Out for Delivery`

### 3. **Delivery Personnel System**
- View and accept orders that are marked "Out for Delivery"
- Mark orders as `Completed` once delivered

All three systems are integrated into one platform, working together via the backend database.

---

## 🚀 How the System Works

### 🔐 Registration & Login
- Users register with their name, contact info, and role (student, staff, or visitor)
- An email verification link is sent for confirmation
- Login includes a **5-digit OTP** sent to email (valid for 5 minutes)

### 👤 Profile & Address Setup
- Users must provide their **campus location** before placing orders
- Address can be updated via the profile section

### 🛒 Ordering Process
- Users browse and customize meals, then add them to the cart
- A **minimum of R50** is required for delivery
- Orders are placed using a **dummy payment gateway** (no real transaction)

### 📦 Order Fulfillment
1. Order is received by cafeteria staff
2. Cafeteria updates status to `Cooking`
3. Once ready, it's marked as `Out for Delivery`
4. Delivery personnel accepts and completes the delivery
5. Order status is updated to `Completed`

> ❗ **Note**: Users must **refresh the page** to see updated order statuses (no real-time push updates yet)

### 📬 Notifications
- Users receive emails with OTPs and order updates
- A receipt is sent via email after a successful order

---

## 📚 Built-in Help & Tutorials

UniEats includes a Help section with:
- 📘 Video and PDF tutorials on registration, cart usage, and order tracking
- Step-by-step visuals and explanations for first-time users

---

## ✨ Features

- ✅ User-friendly food ordering interface
- 🔐 Secure two-factor login with OTP
- 🍱 Meal customization options
- 🛵 Campus-only delivery via student drivers
- 📧 Email alerts and receipts
- 🧭 Interactive help guide for onboarding

---

## ⚠️ Known Limitations

- 💳 Payment is handled via a **dummy processor** (no live payment gateway)
- 🔄 **No real-time updates**; users must manually refresh to view order progress

---

## 🛠️ Tech Stack

| Layer         | Technologies                         |
|---------------|--------------------------------------|
| **Frontend**  | HTML, CSS, JavaScript                |
| **Backend**   | PHP (XAMPP)                          |
| **Database**  | MySQL                                |
| **Auth/Email**| PHPMailer for email and OTP          |
| **Version Control** | Git + GitHub                   |

---

## 🧠 What I Learned

- Implemented **OTP-secured login** using PHPMailer
- Gained experience in **designing multi-role systems**
- Led a team using **agile planning and collaboration**
- Identified scalability issues and areas for improvement (e.g., real-time updates, live payment APIs)

---

## 🚧 Future Enhancements

- 🟢 Integrate **real-time order status updates** using WebSockets or Node.js
- 📱 Build native mobile apps for Android/iOS
- 💼 Integrate with **real payment gateways** (e.g., SnapScan, PayFast)
- 📍 Add **GPS tracking** for deliveries

---

## 👥 Team

- **Stanley Mbhalati** – Project Leader & Backend Developer  
(Created as part of NWU’s Final Year Systems Development Project)

---

## 📝 License

This project is licensed under the **MIT License**.  
Contributions and forks are welcome!

---

## 📸 Screenshots & Demos (Optional)

> - Login and OTP process
![image](https://github.com/user-attachments/assets/d7f2f097-b716-4cbc-95ba-df59ab002df5)

> - Cart & meal customization
> - Admin dashboard
> - Order tracking by role

---

## 📎 Resources

- [Live System](https://unieats.co.za)
- [GitHub Repository](https://github.com/Stan1542/Final-Year-Project-Food-Develivey-App)
- [PDF Help Tutorial](#) *(Upload PDF or link here)*
