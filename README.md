
 🐾 Petpoint Relocation Service – WordPress Plugin

A custom multi-step form plugin for pet relocation services, developed as part of the WordPress Developer recruitment task for **Musemind Digital Agency Ltd.**  
The plugin collects pet, location, and additional service information and stores the data securely in a custom database table while notifying the admin via email.

---

 Features

**Multi-Step Form**  
  Step 1: Pet Information (Type, Breed, Age, Weight, etc.)  
  Step 2: Location Information (Departure & Arrival Cities, Travel Date)  
  Step 3: Additional Services (Grooming, Post-arrival Support)

**Custom Database Table**  
  Submissions are saved into a dedicated table created during plugin activation.

**WP Admin Dashboard Page**  
  A custom admin menu shows all form submissions in a clean table layout.

**Admin Email Notification**  
  Sends an email with full form details upon successful submission.

**Security & Validation**  
  All user inputs are sanitized and validated using WordPress standards.

**Responsive Design**  
  The form UI is fully responsive and follows the provided Figma design.

---

##  Installation

1. Download the plugin ZIP file.
2. Go to your WordPress dashboard → **Plugins** → **Add New**.
3. Click **Upload Plugin**, select the ZIP file, and click **Install Now**.
4. After installation, click **Activate Plugin**.

---

## Usage

Navigate to the page or post where you want to display the form.
Use the shortcode below:
  
  ```php
  [petpoint_form]
  ```

All submitted form data can be viewed in the WP Admin Panel under:  
  **Admin Dashboard → Pet Relocation Submissions**

---

## 📧 Email Notifications

Upon each submission, an email with the following details is sent to the site admin:

- Pet Type, Breed, Age, Weight
- Health and Vaccination Status
- Departure & Arrival Locations
- Travel Date
- Additional Service Preferences

---

## 📁 Plugin Structure

```
petpoint-plugin/
│   └── about.php
├── assets/
│   ├── img/
│   ├── css/
│   └── js/
├── templates/
└── README.md
```

---

## 📋 Notes

- Ensure your email settings in WordPress are properly configured to receive notifications.
- You may modify the form UI from the template files under the `templates/` folder.
- Tested with WordPress 6.x and works with most themes.

---

## 🙏 Acknowledgement

Developed with passion and care as part of the interview process for **Musemind Digital Agency Ltd.**  
Despite limited personal resources, this plugin was created with sincere effort and commitment to quality.

---

## 📞 Contact

**Developer:** Jahirul Islam  
📧 jahirulislam1110005@gmail.com

---