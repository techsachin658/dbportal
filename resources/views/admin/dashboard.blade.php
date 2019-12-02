@extends('layouts.admin')
@section('content')
<div class="height30px"></div>
<div class="row">
<div class="col-md-1"><strong>Dashboard</strong></div>
 <div class="col-lg-5 col-md-6 col-sm-6">
    
      <select class="" id="sel1">
        <option>Last 60 Days</option>
        <option>Last 30 Days</option>
        <option>Last 15 Days</option>
        <option>Last 7 Days</option>
    </select>

 
 </div>
</div>
<div class="height30px"></div>
<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
             
              <div class="cardContainer">
                <div class="row">
                  <div class="col s10">
                    <h4>$35,890 / 255 (CH)</h4>
                    <small>Total Load</small>
                  </div>
                  <div class="col s20">
                      <div class="iconC">
                       <i class="fa fa-upload text-success pull-right" aria-hidden="true"></i>
                      </div>                    
                  </div>
                </div>
              </div>
               
              </div>
           
            <div class="col-lg-4 col-md-6 col-sm-6">
              
              <div class="cardContainer">
                <div class="row">
                  <div class="col s10">
                    <h4>$21,324/ 155 (CH)</h4>
                    <small>Total Spend</small>
                  </div>
                  <div class="col s2">
                      <div class="iconC">
                       <i class="fa fa-usd pull-right text-warning" aria-hidden="true"></i>
                      </div>                    
                  </div>
                </div>
              </div>
         
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
             
              <div class="cardContainer">
                <div class="row">
                  <div class="col s10">
                    <h4>2532</h4>
                    <small>New Accounts</small>
                  </div>
                  <div class="col s2">
                      <div class="iconC">
                       <i class="fa fa-user-circle text-primary pull-right" aria-hidden="true"></i>
                      </div>                    
                  </div>
                </div>
              </div>
            </div>
</div>
<div class="height30px"></div>
  <div class="row">
            <div class="col-md-12">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                 <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="67.95703125" x2="67.95703125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="95.9140625" x2="95.9140625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="123.87109375" x2="123.87109375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="151.828125" x2="151.828125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="179.78515625" x2="179.78515625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="207.7421875" x2="207.7421875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="235.69921875" x2="235.69921875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.4 C 67.957 30 67.957 30 67.957 30 C 95.914 66 95.914 66 95.914 66 C 123.871 84 123.871 84 123.871 84 C 151.828 86.4 151.828 86.4 151.828 86.4 C 179.785 91.2 179.785 91.2 179.785 91.2 C 207.742 96 207.742 96 207.742 96 C 235.699 97.2 235.699 97.2 235.699 97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="67.95703125" y1="30" x2="67.96703125" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="95.9140625" y1="66" x2="95.9240625" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="123.87109375" y1="84" x2="123.88109375" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="151.828125" y1="86.4" x2="151.838125" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="179.78515625" y1="91.2" x2="179.79515625" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="207.7421875" y1="96" x2="207.7521875" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="235.69921875" y1="97.2" x2="235.70921875" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="27.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 28px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="67.95703125" y="125" width="27.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 28px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="95.9140625" y="125" width="27.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 28px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="123.87109375" y="125" width="27.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 28px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="151.828125" y="125" width="27.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 28px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="179.78515625" y="125" width="27.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 28px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="207.7421875" y="125" width="27.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 28px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="235.69921875" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
  </div>
           
@endsection

