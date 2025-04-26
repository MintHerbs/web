// ==== NAVIGATION BETWEEN SECTIONS ====
const navBooks   = document.getElementById('navBooks');
const navUserLog = document.getElementById('navUserLog');
const bookWrap   = document.getElementById('bookManagement');
const logSection = document.getElementById('userLogSection');

navBooks.addEventListener('click', () => {
  navBooks.classList.add('active');
  navUserLog.classList.remove('active');
  bookWrap.classList.remove('hidden');
  logSection.classList.add('hidden');
});
navUserLog.addEventListener('click', () => {
  navUserLog.classList.add('active');
  navBooks.classList.remove('active');
  bookWrap.classList.add('hidden');
  logSection.classList.remove('hidden');
});

// ==== ADD vs REMOVE BOOK TOGGLE ====
const btnAdd        = document.getElementById('btnAdd');
const btnRemove     = document.getElementById('btnRemove');
const addSection    = document.getElementById('addSection');
const removeSection = document.getElementById('removeSection');

btnAdd.addEventListener('click', () => {
  btnAdd.classList.add('active');
  btnRemove.classList.remove('active');
  addSection.classList.remove('hidden');
  removeSection.classList.add('hidden');
});
btnRemove.addEventListener('click', () => {
  btnRemove.classList.add('active');
  btnAdd.classList.remove('active');
  removeSection.classList.remove('hidden');
  addSection.classList.add('hidden');
});

// ==== IMAGE PREVIEW ====
document.getElementById('imageInput').addEventListener('change', e => {
  const file = e.target.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = () => {
    document.getElementById('preview').src = reader.result;
  };
  reader.readAsDataURL(file);
});

// ==== CATEGORY DROPDOWN ====
const dropdown    = document.querySelector('.dropdown');
const sel         = dropdown.querySelector('.dropdown-selected');
const list        = dropdown.querySelector('.dropdown-list');
const selText     = dropdown.querySelector('.selected-text');

sel.addEventListener('click', () => {
  list.style.display = list.style.display === 'block' ? 'none' : 'block';
});
list.querySelectorAll('li').forEach(item => {
  item.addEventListener('click', () => {
    selText.textContent = item.textContent;
    list.style.display = 'none';
  });
});
document.addEventListener('click', e => {
  if (!dropdown.contains(e.target)) {
    list.style.display = 'none';
  }
});

// ==== REMOVE BOOK LOGIC ====
document.getElementById('searchBtn').addEventListener('click', () => {
  const q = document.getElementById('searchInput').value.trim();
  if (!q) {
    return alert('Please enter a book name or ISBN to search.');
  }
  alert(`Searching for "${q}"…`); // replace with real API call
});
document.getElementById('removeBtn').addEventListener('click', () => {
  const q = document.getElementById('searchInput').value.trim();
  if (!q) {
    return alert('Nothing to remove. Search first.');
  }
  if (confirm(`Are you sure you want to remove "${q}"?`)) {
    alert(`"${q}" has been removed.`);
    document.getElementById('searchInput').value = '';
  }
});

// ==== USER LOG SEARCH ====
const userItems = document.querySelectorAll('.user-item');
document.getElementById('userSearchBtn').addEventListener('click', () => {
  const q = document.getElementById('userSearchInput').value.trim().toLowerCase();
  userItems.forEach(item => {
    const name = item.querySelector('strong').textContent.toLowerCase();
    item.style.display = name.includes(q) ? 'flex' : 'none';
  });
});

// ==== USER LOG FILTERS ====
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const f = btn.dataset.filter;
    userItems.forEach(item => {
      const isRead = item.dataset.read === 'true';
      if (f === 'all')      item.style.display = 'flex';
      else if (f === 'read')   item.style.display = isRead   ? 'flex' : 'none';
      else if (f === 'unread') item.style.display = !isRead  ? 'flex' : 'none';
    });
  });
});

// ==== BAN USER ====
document.getElementById('userList').addEventListener('click', e => {
  if (e.target.classList.contains('btn-ban')) {
    const li   = e.target.closest('.user-item');
    const name = li.querySelector('strong').textContent;
    if (confirm(`Ban ${name}? This action cannot be undone.`)) {
      li.remove();
    }
  }
});

