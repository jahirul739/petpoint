document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.right form');
  
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const name = form.querySelector('input[type="text"]').value.trim();
      const email = form.querySelector('input[type="email"]').value.trim();
      const phone = form.querySelector('input[type="tel"]').value.trim();
      const date = form.querySelector('input[type="date"]').value;
      const category = form.querySelector('select').value;
  
      if (!name || !email || !phone || !date || !category) {
        alert('Please fill out all fields!');
        return;
      }
  
      alert(`Thanks ${name}, your request has been submitted!`);
      form.reset();
    });
  });
  