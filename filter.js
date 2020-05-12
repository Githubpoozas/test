
// const datas = [
//   {
//     items: [
//       { name: "xs", selected: false },
//       { name: "s", selected: false },
//       { name: "m", selected: true },
//       { name: "l", selected: true },
//       { name: "xl", selected: false },
//     ],
//   },
// ];

// console.log(datas[0].items[0].selected);

// datas.forEach(data => data.items.forEach(item => console.log(item.name)));

// let num = datas.filter(
//   data => data.items.forEach(item => item.selected == true).length
// );
// console.log(num);

// const datas = [
//     { name: "xs", selected: false },
//     { name: "s", selected: false },
//     { name: "m", selected: true },
//     { name: "l", selected: true },
//     { name: "xl", selected: false },
//   ];
  
//   console.log(datas.filter(data => data.selected == true).length);
  

  const datas = [
    { name: "xs", selected: false },
    { name: "s", selected: false },
    { name: "m", selected: true },
    { name: "l", selected: true },
    { name: "xl", selected: false },
  ];
  
  console.log(datas.filter(data => data.selected == true).length);
  