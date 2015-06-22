<!DOCTYPE html>
<html lang="en" class="fuelux">
  <head>
    <meta charset="utf-8">
    <title>Fuel UX Tree</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://www.fuelcdn.com/fuelux/3.5.0/css/fuelux.min.css" rel="stylesheet"/>
    <link href="slider_css.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        
        <style type='text/css'>
        #RGB {
	height: 20px !important;
	background: rgb(128, 128, 128);
}
#RC .slider-selection {
	background: #FF8282 !important;
}
#RC .slider-handle {
	background: red !important;
}
#GC .slider-selection {
	background: #428041 !important;
}
#GC .slider-handle {
	background: green !important;
}
#BC .slider-selection {
	background: #8283FF !important;
}
#BC .slider-handle {
	border-bottom-color: blue !important;
}
#R, #G, #B {
	width: 300px !important;
}
        </style>
  </head>
  <body>

   
      

<div class="fu-example section">
    <div class="repeater" data-staticheight="400" id="myRepeater">
      <div class="repeater-header">
        <div class="repeater-header-left">
          <span class="repeater-title">Awesome Repeater</span>
          <div class="repeater-search">
            <div class="search input-group">
              <input type="search" class="form-control" placeholder="Search"/>
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <span class="glyphicon glyphicon-search"></span>
                  <span class="sr-only">Search</span>
                </button>
              </span>
            </div>
          </div>
        </div>
        <div class="repeater-header-right">
          <div class="btn-group selectlist repeater-filters" data-resize="auto">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <span class="selected-label">&nbsp;</span>
              <span class="caret"></span>
              <span class="sr-only">Toggle Filters</span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li data-value="all" data-selected="true"><a href="#">all</a></li>
              <li data-value="bug"><a href="#">bug</a></li>
              <li data-value="dark"><a href="#">dark</a></li>
              <li data-value="dragon"><a href="#">dragon</a></li>
              <li data-value="electric"><a href="#">electric</a></li>
              <li data-value="fairy"><a href="#">fairy</a></li>
              <li data-value="fighting"><a href="#">fighting</a></li>
              <li data-value="fire"><a href="#">fire</a></li>
              <li data-value="flying"><a href="#">flying</a></li>
              <li data-value="ghost"><a href="#">ghost</a></li>
              <li data-value="grass"><a href="#">grass</a></li>
              <li data-value="ground"><a href="#">ground</a></li>
              <li data-value="ice"><a href="#">ice</a></li>
              <li data-value="normal"><a href="#">normal</a></li>
              <li data-value="poison"><a href="#">poison</a></li>
              <li data-value="psychic"><a href="#">psychic</a></li>
              <li data-value="rock"><a href="#">rock</a></li>
              <li data-value="steel"><a href="#">steel</a></li>
              <li data-value="water"><a href="#">water</a></li>
            </ul>
            <input class="hidden hidden-field" name="filterSelection" readonly="readonly" aria-hidden="true" type="text"/>
          </div>
          <div class="btn-group repeater-views" data-toggle="buttons">
            <label class="btn btn-default active">
              <input name="repeaterViews" type="radio" value="list"><span class="glyphicon glyphicon-list"></span>
            </label>
            <label class="btn btn-default">
              <input name="repeaterViews" type="radio" value="thumbnail"><span class="glyphicon glyphicon-th"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="repeater-viewport">
          
          
          
        <div class="repeater-canvas">
            
            
            
            
            
        </div>
        <div class="loader repeater-loader"></div>
      </div>
      <div class="repeater-footer">
        <div class="repeater-footer-left">
          <div class="repeater-itemization">
            <span><span class="repeater-start"></span> - <span class="repeater-end"></span> of <span class="repeater-count"></span> items</span>
            <div class="btn-group selectlist" data-resize="auto">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="selected-label">&nbsp;</span>
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li data-value="5"><a href="#">5</a></li>
                <li data-value="10" data-selected="true"><a href="#">10</a></li>
                <li data-value="20"><a href="#">20</a></li>
                <li data-value="50" data-foo="bar" data-fizz="buzz"><a href="#">50</a></li>
                <li data-value="100"><a href="#">100</a></li>
              </ul>
              <input class="hidden hidden-field" name="itemsPerPage" readonly="readonly" aria-hidden="true" type="text"/>
            </div>
            <span>Per Page</span>
          </div>
        </div>
        <div class="repeater-footer-right">
          <div class="repeater-pagination">
            <button type="button" class="btn btn-default btn-sm repeater-prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous Page</span>
            </button>
            <label class="page-label" id="myPageLabel">Page</label>
            <div class="repeater-primaryPaging active">
              <div class="input-group input-append dropdown combobox">
                <input type="text" class="form-control" aria-labelledby="myPageLabel">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right"></ul>
                </div>
              </div>
            </div>
            <input type="text" class="form-control repeater-secondaryPaging" aria-labelledby="myPageLabel">
            <span>of <span class="repeater-pages"></span></span>
            <button type="button" class="btn btn-default btn-sm repeater-next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next Page</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

      <!--slider html-->
      <p>
<b>R</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
</p>
<p>
<b>G</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
</p>
<p>
<b>B</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
</p>
<div id="RGB"></div>

<!--<div class='slider-example'>
      		<h3>Example 3:</h3>
      		<p>Using events to work with the values and style the selection and handles via CSS. The tooltip is disabled and diferent shapes for the handles.</p>
      		<div class="well">
      			<p>
	        	<b>R</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
	            </p>
	            <p>
	            <b>G</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
	            </p>
	            <p>
	            <b>B</b> <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
	            </p>
	            <div id="RGB"></div>
      		</div>

      </div>-->
     <!--slider html end-->




      <script>
          
          $( document ).ready(function(){
          
        function staticDataSource(options, callback) {

  // define the columns for the grid
  var columns = [
    {
      'label': 'Name',      // column header label
      'property': 'name',   // the JSON property you are binding to
      'sortable': true      // is the column sortable?
    },
    {
      'label': 'Description',
      'property': 'description',
      'sortable': true
    },
    {
      'label': 'Status',
      'property': 'status',
      'sortable': true
    },
    {
      'label': 'Category',
      'property': 'category',
      'sortable': true
    }
  ];

  // generate the rows in your dataset
  // note: the property names of your items should
  // match the column properties defined above
  //
  function generateRandomData() {
    var items = [];
    var statuses = ['archived', 'active', 'draft'];
    var categories = ['category1', 'category2', 'category3'];
    function getRandomStatus() {
      var min = 0;
      var max = 2;
      var index = Math.floor(Math.random() * (max - min + 1)) + min;
      return statuses[index];
    }
    function getRandomCategory() {
      var min = 0;
      var max = 2;
      var index = Math.floor(Math.random() * (max - min + 1)) + min;
      return categories[index];
    }

    for(var i=1; i<=100; i++) {
      var item = {
        id: i,
        name: 'item ' + i,
        description: 'desc ' + i,
        status: getRandomStatus(),
        category: getRandomCategory()
      }
      items.push(item);
    };
    console.log(JSON.stringify(items));
    return items;
  }

  items = generateRandomData();

  // transform array
  var pageIndex = options.pageIndex;
  var pageSize = options.pageSize;
  var totalItems = items.length;
  var totalPages = Math.ceil(totalItems / pageSize);
  var startIndex = (pageIndex * pageSize) + 1;
  var endIndex = (startIndex + pageSize) - 1;
  if (endIndex > items.length) {
    endIndex = items.length;
  }

  var rows = items.slice(startIndex - 1, endIndex);

  // define the datasource
  var dataSource = {
    'page': pageIndex,
    'pages': totalPages,
    'count': totalItems,
    'start': startIndex,
    'end': endIndex,
    'columns': columns,
    'items': rows
  };

  // pass the datasource back to the repeater
  callback(dataSource);
}$(function() {
  // initialize the repeater
  var repeater = $('#myRepeater');
  repeater.repeater({
    // setup your custom datasource to handle data retrieval;
    // responsible for any paging, sorting, filtering, searching logic
    dataSource: staticDataSource
  });
});
//
//$(function() {
//  // initialize the repeater
//  var repeater = $('#myRepeater');
//  repeater.repeater({
//    // setup your custom datasource to handle data retrieval;
//    // responsible for any paging, sorting, filtering, searching logic
//    dataSource: staticDataSource
//  });
//});
          
          
          
          
          
          
          
          function dynamicDataSource(options, callback) {

  // define the columns for the grid
  var columns = [
    {
      'label': 'Name',      // column header label
      'property': 'name',   // the JSON property you are binding to
      'sortable': true      // is the column sortable?
    },
         {
      'label': 'Status',
      'property': 'status',
      'sortable': true
    },
    {
      'label': 'Category',
      'property': 'category',
      'sortable': true
    }
  ];   
          
 
          
      // set options
  var pageIndex = options.pageIndex;
  var pageSize = options.pageSize;    
      var options = {
    'pageIndex': pageIndex,
    'pageSize': pageSize,
    'sortDirection': options.sortDirection,
    'sortBy': options.sortProperty,
    'filterBy': options.filter.value || '',
    'searchBy': options.search || ''
  };     
     $.ajax({
    'type': 'post',
    'url': '/repeater/data',
    'data': options
  })
  .done(function(data) {     
          
       var items = data.items;
    var totalItems = data.total;
    var totalPages = Math.ceil(totalItems / pageSize);
    var startIndex = (pageIndex * pageSize) + 1;
    var endIndex = (startIndex + pageSize) - 1;

    if(endIndex > items.length) {
      endIndex = items.length;
    }      
     // configure datasource
    var dataSource = {
      'page':    pageIndex,
      'pages':   totalPages,
      'count':   totalItems,
      'start':   startIndex,
      'end':     endIndex,
      'columns': columns,
      'items':   items
    };

    // pass the datasource back to the repeater
    callback(dataSource);
  });
}       
          
      });    
      </script>
      
      
      
      
      
      <!--slide javascript-->
      
      <script >
          $( document ).ready(function(){
      var RGBChange = function() {
	$('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
};

var r = $('#R').slider()
		.on('slide', RGBChange)
		.data('slider');
var g = $('#G').slider()
		.on('slide', RGBChange)
		.data('slider');
var b = $('#B').slider()
		.on('slide', RGBChange)
		.data('slider');
        
            });  
      </script>
      
      
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://www.fuelcdn.com/fuelux/3.4.0/js/fuelux.min.js"></script>
    <script type='text/javascript' src="slider.js"></script>
  </body>
</html>

