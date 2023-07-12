# TimesheetCategoryBundle

## Installation

copy all files to TimesheetCategoryBundle in var/plugins/
```
var/plugins/
├── TimesheetCategoryBundle
|   └ ... copy all ...

```

## Usage

to store a category at a timesheet, set header ```FORM-CATEGORY``` at ```POST /api/timesheets``` or ```PUT /api/timesheets/$id``` requests

```json
//timesheet response
{
    "activity": 1,
    "project": 1,  
    "category": "holiday"
}
```
