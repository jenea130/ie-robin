export default function tabs() {
  const tabs_tab = document.querySelectorAll(".tabs__tab");
  const tabs_items = document.querySelectorAll(".tabs__item");
  
  showFirst()
  

  tabs_tab.forEach((item, index) => {
    item.addEventListener("click", () => {
      resetActive()
      item.classList.add('active')
      tabs_items[index].classList.add("active")
      setTimeout(() => {
        tabs_items[index].classList.add("show")
      }, 300)
    })
  })

  function showFirst() {
    tabs_tab[0].classList.add("active")
    tabs_items[0].classList.add("active")
    tabs_items[0].classList.add("show")
  }

  function resetActive() {
    tabs_tab.forEach(item => {
      item.classList.remove("active")
    })
    tabs_items.forEach(item => {
      item.classList.remove("active")
    })
    tabs_items.forEach(item => {
      item.classList.remove("show")
    })
  }
}

tabs()
