jQuery(document).ready(()=>{

  imgLiquid()

})

function imgLiquid() {

  jQuery(".imgLiquid.imgLiquidFill").imgLiquid()
  jQuery(".imgLiquid.imgLiquidNoFill").imgLiquid({
    fill: false
  })
  jQuery(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
    fill:false,
    horizontalAlign:"left"
  })
  jQuery(".imgLiquid.imgLiquidNoFillRight").imgLiquid({
    fill:false,
    horizontalAlign:"right"
  })
}
