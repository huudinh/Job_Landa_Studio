const recruitCard = (data, index) => {
  return `
    <div class="brandPost_dls_1_0_0__item">
        <div class="brandPost_dls_1_0_0__pic">
            <img src="${data.pic}" class="modal-btn" data-modal="modal-pic" alt="">
        </div>
        <div class="brandPost_dls_1_0_0__name">${data.name}</div>
        <div class="brandPost_dls_1_0_0__des">${data.des}</div>
    </div>
  `;
};

const pageItem = (num) => {
  return `<li>${num}</li>`;
}

const noData = `<div>Không có dữ liệu</div>`;
const render = (data) => {
  if (data.length === 0) {
    document.querySelector(".brandPost_dls_1_0_0__photo").innerHTML = noData;
    document.getElementsByClassName(
      "project_dls_1_0_0__more"
    )[0].style.display = "none";
  } else {
    function loop(key) {
      document.querySelector(".brandPost_dls_1_0_0__photo").innerHTML = "";
      for (let i = 0; i < data.length; i++) {
        if (i <= key) {
          document.querySelector(".brandPost_dls_1_0_0__photo").innerHTML +=
            recruitCard(data[i]);
            // document.querySelector('.brandPost_dls_1_0_0__pages').innerHTML += 
            //   pageItem(1);
          }
          if (key + 2 > data.length) {
            
          }
         
      }
    }
    // chay lan dau
    let count = 3;
    loop(count);
    const counter = () => loop((count += 3));
    let numberPage = data.length / count;

    for(let i = 1; i <= numberPage; i++){
       document.querySelector('.brandPost_dls_1_0_0__pages').innerHTML += pageItem(i);
    }
    // document
    //   .getElementsByClassName("project_dls_1_0_0__more")[0]
    //   .addEventListener("click", () => {
    //     counter();
        
    //   });


    // Goi page
    // const page = document.querySelector('.brandPost_dls_1_0_0__pages');
    // for(let i = 0; i < data.length; i)


    // xử ly click more
    // document
    //   .getElementsByClassName("project_dls_1_0_0__more")[0]
    //   .addEventListener("click", () => {
    //     counter();
        
    //   });
  }
};

// get All Data
render(data);