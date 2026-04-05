(function() {
  'use strict';
  
  window.TableSearchSort = class {
    constructor(config) {
      this.tableId = config.tableId;
      this.searchInputSelector = config.searchInputSelector;
      this.searchColumnIndex = config.searchColumnIndex || 0;
      this.sortableColumns = config.sortableColumns || [];
      
      this.table = document.getElementById(this.tableId);
      this.searchInput = document.querySelector(this.searchInputSelector);
      this.tbody = this.table?.querySelector('tbody');
      this.thead = this.table?.querySelector('thead');
      this.allRows = Array.from(this.tbody?.querySelectorAll('tr') || []);
      
      if (!this.table || !this.searchInput || !this.tbody) {
        console.warn(`TableSearchSort: Cannot initialize - missing elements for table #${this.tableId}`);
        return;
      }
      
      this.init();
    }
    
    init() {
      this.searchInput.addEventListener('input', e => this.handleSearch(e));
      
      if (this.sortableColumns.length > 0) {
        this.makeHeadersSortable();
      }
    }
    
    handleSearch(event) {
      const searchTerm = event.target.value.toLowerCase().trim();
      
      this.allRows.forEach(row => {
        const cellText = row.textContent.toLowerCase();
        const matches = cellText.includes(searchTerm);
        row.classList.toggle('d-none', !matches);
      });
    }
    
    makeHeadersSortable() {
      const headers = this.thead?.querySelectorAll('th') || [];
      
      headers.forEach((header, index) => {
        if (this.sortableColumns.includes(index)) {
          header.style.cursor = 'pointer';
          header.addEventListener('click', () => this.handleSort(index));
        }
      });
    }
    
    handleSort(columnIndex) {
      const currentSort = this.table.dataset.sortColumn;
      const currentDir = this.table.dataset.sortDir;
      
      const isNewColumn = currentSort != columnIndex;
      const isAsc = isNewColumn || currentDir === 'desc';
      
      this.table.dataset.sortColumn = columnIndex;
      this.table.dataset.sortDir = isAsc ? 'asc' : 'desc';
      
      const visibleRows = this.allRows.filter(row => !row.classList.contains('d-none'));
      
      visibleRows.sort((a, b) => {
        const aText = a.cells[columnIndex]?.textContent.trim() || '';
        const bText = b.cells[columnIndex]?.textContent.trim() || '';
        
        const comparison = aText.localeCompare(bText, undefined, { numeric: true, sensitivity: 'base' });
        return isAsc ? comparison : -comparison;
      });
      
      visibleRows.forEach(row => this.tbody.appendChild(row));
    }
  };
})();
