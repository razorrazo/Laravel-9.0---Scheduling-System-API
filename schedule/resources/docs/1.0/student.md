# Overview

---

- [Introduction](#section-1)
- [Create Students](#section-2)
- [Edit Students](#section-3)
- [Delete Students](#section-4)
- [Browse list of all Students](#section-5)
- [View all Students assigned to a Class](#section-6)
- [Search Student by available fields/associations](#section-7)

<a name="section-1"></a>
## Introduction
The Scheduling System API makes it possible to create students to your workflow.

<a name="section-2"></a>
## Create Students
This method is especially useful for creating a student.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Post | api/students |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Student Id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| first_name | Optional | Student First Name |  | Marcelo |
| last_name | Optional | Student Last Name |  | Quintana |


## Example Response
```php

    {
        "id":1,
        "created_at":2022-04-03T22:53:25.000000Z,
        "updated_at":2022-04-03T22:53:25.000000Z,
        "first_name":"jose",
        "last_name":"gytr"   
    }
```

<a name="section-3"></a>
## Edit Students
This method is especially useful for editing a student.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Put | api/students/{id} |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Student Id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| first_name | Optional | Student First Name |  | Marcelo |
| last_name | Optional | Student Last Name |  | Quintana |


## Example Response


```php

    {
        "id":1,
        "created_at":2022-04-03T22:53:25.000000Z,
        "updated_at":2022-04-03T22:53:25.000000Z,
        "first_name":"jose",
        "last_name":"gytr"   
    }
```

<a name="section-4"></a>
## Delete Students
This method is especially useful for deleting a student.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Delete | api/students/{id} |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Student Id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| first_name | No | Student First Name |  | Marcelo |
| last_name | No | Student Last Name |  | Quintana |


## Example Response


```php

    {
        "id":1,
        "created_at":2022-04-03T22:53:25.000000Z,
        "updated_at":2022-04-03T22:53:25.000000Z,
        "first_name":"jose",
        "last_name":"gytr"   
    }
```

<a name="section-5"></a>
## Browse list of all Students


This method is especially useful for viewing the list of all students.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Get | api/students |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Student Id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| first_name | No | Student First Name |  | Marcelo |
| last_name | No | Student Last Name |  | Quintana |


## Example Response


```php

    {
        "id":1,
        "created_at":2022-04-03T22:53:25.000000Z,
        "updated_at":2022-04-03T22:53:25.000000Z,
        "first_name":"Marcelo",
        "last_name":"Quintana"   
    },
    {
        "id":2,
        "created_at":2022-04-03T22:53:25.000000Z,
        "updated_at":2022-04-03T22:53:25.000000Z,
        "first_name":"Mike",
        "last_name":"Bahia"   
    },
    {
        "id":3,
        "created_at":2022-04-03T22:53:25.000000Z,
        "updated_at":2022-04-03T22:53:25.000000Z,
        "first_name":"Belen",
        "last_name":"Carriazo"   
    }
```

<a name="section-6"></a>
## View all Students assigned to a Class
This method is especially useful for viewing the list of students with their enrolled classes.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Get | api/studentsclasses |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Student Id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| first_name | No | Student First Name |  | Marcelo |
| last_name | No | Student Last Name |  | Quintana |


## Example Response


```php

    {
    "id": 2,
    "created_at": "2022-04-03T22:53:25.000000Z",
    "updated_at": "2022-04-03T22:53:25.000000Z",
    "first_name": "Marcelo",
    "last_name": "Quintana",
    "groups": [
      {
        "id": 1,
        "created_at": "2022-04-04T02:19:58.000000Z",
        "updated_at": "2022-04-04T02:19:58.000000Z",
        "code": "md",
        "title": "marketing",
        "description": "none",
        "pivot": {
          "student_id": 2,
          "group_id": 1,
          "created_at": "2022-04-04T03:16:24.000000Z",
          "updated_at": "2022-04-04T03:16:24.000000Z"
        }
      },
      {
        "id": 2,
        "created_at": "2022-04-04T02:20:28.000000Z",
        "updated_at": "2022-04-04T02:20:28.000000Z",
        "code": "wftl",
        "title": "Laravel",
        "description": "none",
        "pivot": {
          "student_id": 2,
          "group_id": 2,
          "created_at": "2022-04-04T03:16:32.000000Z",
          "updated_at": "2022-04-04T03:16:32.000000Z"
        }
      }
```

<a name="section-7"></a>
## Search Students by avaliable fields/associations
This method is especially useful for viewing the list of classes of an specific student id.
There are a few things to note when using this method.


## Request
| Method | Endpoint   |
| : |   :-   |
| Get | api/students_filter_by_classes/{id} |

## Resource Information

| | |
| :- |   :-   |
| Response Format | JSON   |
| Requires authentication | No |

## Parameters

| Name | Required   | Description| Default Value| Example|
| : | : | : | : | : |  
| id | No | Student Id Table |  | 1 |
| created_at | No |  |  | 2022-04-04 02:19:58 |
| updated_at | No |  |  | 2022-04-04 03:19:58 |
| first_name | No | Student First Name |  | Marcelo |
| last_name | No | Student Last Name |  | Quintana |


## Example Response



```php

    {
        "id":1,
        "created_at":2022-04-04T02:20:28.000000Z,
        "updated_at":2022-04-04T02:20:28.000000Z,
        "first_name":"jose",
        "last_name":"gytr"   
    }
```