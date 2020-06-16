function newObject(dataInput) {
  let newObject = {}
  for (let [key, value] of Object.entries(dataInput)) {
    if (key == "diamondWeight") {
      newObject[key] = []
      let arr = value.replace(" ", "").split(",")
      arr.forEach(item => {
        newObject["diamondWeight"].push(item.replace(" ", ""))
      })
    } else if (key == "field4" || key == "field5") {
      if (value != "") {
        if (value.includes(",")) {
          let arr = value.split(",")
          arr.forEach(item => {
            if (item !== "") {
              newObject["diamondWeight"].push(item)
            }
          })
        } else {
          newObject["diamondWeight"].push(value.replace(" ", ""))
        }
      }
    } else if (key == "goldWeight" || key == "whiteGoldWeight") {
      newObject[key] = parseFloat(value.replace(" ", ""))
    } else if (key == "yellowGoldPrice" || key == "whiteGoldPrice") {
      newObject[key] = parseInt(value.trim().replace(/,/g, ""))
    } else {
      newObject[key] = value.replace(" ", "")
    }
  }
  return newObject
}

// newData.forEach(item => {
//   console.log(newObject(item))
// })

// for (const property in data) {
//   console.log(newObject(data[property]))
// }

const datas = require("./listNR")
// console.log(data)

newData = {}
for (const data in datas) {
  // console.log(`${data}: ${datas[data]}`)

  newData[data] = []

  datas[data].forEach(item => {
    // console.log(newObject(item))
    // console.log(item)
    newData[data].push(newObject(item))
  })
}

// console.log(newData)

// Write new json file
const fs = require("fs")
fs.writeFile("newListNR.json", JSON.stringify(newData), err => {
  // Checking for errors
  if (err) throw err
  console.log("Done writing") // Success
})
