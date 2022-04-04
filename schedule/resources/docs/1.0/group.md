# Overview

---

- [Introduction](#section-1)
- [Create Classes](#section-2)
- [Edit Classes](#section-3)
- [Delete Classes](#section-4)
- [Browse list of all Classes](#section-5)
- [View all Classes assigned to a Student](#section-6)
- [Search Classes by available fields/associations](#section-7)

<a name="section-1"></a>
## Introduction
The Scheduling System API makes it possible to create clasess to your workflow. Class is reserved by PHP, so group is making reference to class.

<a name="section-2"></a>
## Create Classes

This method is especially useful for creating a class.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Post | api/groups |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Class id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| code | Optional | Class Code |  | DM-1 |
| title | Optional | Class Title |  | Digital Marketing |
| Description | Optional | Class Description |  | specify course content |

## Example Response


```php

    {
        "id":1,
        "created_at":null,
        "updated_at":null,
        "code":"jose",
        "title":"gytr"
        "description":"gytr"   
    }
```

<a name="section-3"></a>
## Edit Classes
This method is especially useful for editing a class.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Put | api/groups/{id} |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Class id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| code | No | Class Code |  | DM-1 |
| title | No | Class Title |  | Digital Marketing |
| Description | No | Class Description |  | specify course content |

## Example Response


```php

    {
        "id":1,
        "created_at":null,
        "updated_at":null,
        "code":"jose",
        "title":"gytr"
        "description":"gytr"   
    }
```

<a name="section-4"></a>
## Delete Classes

This method is especially useful for deleting a class.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Delete | api/groups/{id} |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Class id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| code | No | Class Code |  | DM-1 |
| title | No | Class Title |  | Digital Marketing |
| Description | No | Class Description |  | specify course content |

## Example Response


```php

    {
        "id":1,
        "created_at":null,
        "updated_at":null,
        "code":"jose",
        "title":"gytr"
        "description":"gytr"   
    }
```

<a name="section-5"></a>
## Browse list of all Classes
This method is especially useful for viewing the list of all classes.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Get | api/groups |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Class id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| code | No | Class Code |  | DM-1 |
| title | No | Class Title |  | Digital Marketing |
| Description | No | Class Description |  | specify course content |


## Example Response



```php

     {
    "id": 1,
    "created_at": "2022-04-04T02:19:58.000000Z",
    "updated_at": "2022-04-04T02:19:58.000000Z",
    "code": "md",
    "title": "marketing",
    "description": "none"
  },
  {
    "id": 2,
    "created_at": "2022-04-04T02:20:28.000000Z",
    "updated_at": "2022-04-04T02:20:28.000000Z",
    "code": "wftl",
    "title": "Laravel",
    "description": "none"
  }
```

<a name="section-6"></a>
## View all Classes assigned to a student
This method is especially useful for viewing the list of students with their enrolled classes.
There are a few things to note when using this method.


## Request

| Method | Endpoint   |
| : |   :-   |
| Get | api/classestudents |
## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters
| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Class id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| code | No | Class Code |  | DM-1 |
| title | No | Class Title |  | Digital Marketing |
| Description | No | Class Description |  | specify course content |


## Example Response


```php

    {
        "id":1,
        "created_at":null,
        "updated_at":null,
        "code":"jose",
        "title":"gytr"
        "description":"gytr"   
    }
```

<a name="section-7"></a>
## Search Classes by avaliable fields/associations
This method is especially useful for viewing the list of students of an specific class id.
There are a few things to note when using this method.

## Request

| Method | Endpoint   |
| : |   :-   |
| Get | api/classes_filter_by_students/{id} |
## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters
| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Class id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| code | No | Class Code |  | DM-1 |
| title | No | Class Title |  | Digital Marketing |
| Description | No | Class Description |  | specify course content |


## Example Response



```php

    {
        "id":1,
        "created_at":null,
        "updated_at":null,
        "code":"jose",
        "title":"gytr"
        "description":"gytr"   
    }
```