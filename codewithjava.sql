-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 12:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codewithjava`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `Id` int(11) NOT NULL,
  `Topic_des` text NOT NULL,
  `Topic` text NOT NULL,
  `Learn` text NOT NULL,
  `Application` text NOT NULL,
  `Pre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`Id`, `Topic_des`, `Topic`, `Learn`, `Application`, `Pre`) VALUES
(1, 'C# is a simple, modern, general-purpose, object-oriented programming language developed by Microsoft within its .NET initiative led by Anders Hejlsberg. This tutorial will teach you basic C# programming and will also take you through various advanced concepts related to C# programming language.', 'C#', 'Mobile first approach − Bootstrap 3, framework consists of Mobile first styles throughout the entire library instead them of in separate files. Browser Support − It is supported by all popular browsers. Popular Browser Easy to get started − With just the knowledge of HTML and CSS anyone can get started with Bootstrap. Also the Bootstrap official site has a good documentation. Responsive design − Bootstraps responsive CSS adjusts to Desktops, Tablets and Mobiles. More about the responsive design is in the chapter Bootstrap Responsive Design. Responsive Design Provides a clean and uniform solution for building an interface for developers. It contains beautiful and functional built-in components which are easy to customize. It also provides web based customization. And best of all it is an open source.', 'Scaffolding − Bootstrap provides a basic structure with Grid System, link styles, and background. This is is covered in detail in the section Bootstrap Basic Structure CSS − Bootstrap comes with the feature of global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system. This is covered in detail in the section Bootstrap with CSS. Components − Bootstrap contains over a dozen reusable components built to provide iconography, dropdowns, navigation, alerts, pop-overs, and much more. This is covered in detail in the section Layout Components. JavaScript Plugins − Bootstrap contains over a dozen custom jQuery plugins. You can easily include them all, or one by one. This is covered in details in the section Bootstrap Plugins. Customize − You can customize Bootstraps components, LESS variables, and jQuery plugins to get your very own version.', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(2, 'It is a front-end framework used for easier and faster web development. It includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many others. It can also use JavaScript plug-ins. It facilitates you to create responsive designs.', 'BOOTSTRAP', 'Mobile first approach − Bootstrap 3, framework consists of Mobile first styles throughout the entire library instead them of in separate files. Browser Support − It is supported by all popular browsers. Popular Browser Easy to get started − With just the knowledge of HTML and CSS anyone can get started with Bootstrap. Also the Bootstrap official site has a good documentation. Responsive design − Bootstraps responsive CSS adjusts to Desktops, Tablets and Mobiles. More about the responsive design is in the chapter Bootstrap Responsive Design. Responsive Design Provides a clean and uniform solution for building an interface for developers. It contains beautiful and functional built-in components which are easy to customize. It also provides web based customization. And best of all it is an open source.', 'Scaffolding − Bootstrap provides a basic structure with Grid System, link styles, and background. This is is covered in detail in the section Bootstrap Basic Structure CSS − Bootstrap comes with the feature of global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system. This is covered in detail in the section Bootstrap with CSS. Components − Bootstrap contains over a dozen reusable components built to provide iconography, dropdowns, navigation, alerts, pop-overs, and much more. This is covered in detail in the section Layout Components. JavaScript Plugins − Bootstrap contains over a dozen custom jQuery plugins. You can easily include them all, or one by one. This is covered in details in the section Bootstrap Plugins. Customize − You can customize Bootstraps components, LESS variables, and jQuery plugins to get your very own version.', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(3, 'CSS is used to control the style of a web document in a simple and easy way. CSS is the acronym for \"Cascading Style Sheet\". This tutorial covers both the versions CSS1,CSS2 and CSS3, and gives a complete understanding of CSS, starting from its basics to advanced concepts', 'CSS', 'Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable. CSS is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning CSS: Create Stunning Web site - CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects. Become a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill. Control web - CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is combined with the markup languages HTML or XHTML. Learn other languages - Once you understands the basic of HTML and CSS then other related technologies like javascript, php, or angular are become easier to understand.', 'As mentioned before, CSS is one of the most widely used style language over the web. Im going to list few of them here:\r\n\r\nCSS saves time - You can write CSS once and then reuse same sheet in multiple HTML pages. You can define a style for each HTML element and apply it to as many Web pages as you want.\r\nBecome a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.\r\nEasy maintenance - To make a global change, simply change the style, and all elements in all the web pages will be updated automatically.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(4, 'Python is a popular programming language. It was created by Guido van Rossum, and released in 1991. It is used for:web development (server-side),software development,mathematics,system scripting. What is the introduction of Python? Python has a simple syntax similar to the English language. Python has syntax that allows developers to write programs with fewer lines than some other programming languages. Python runs on an interpreter system, meaning that code can be executed as soon as it is written.', 'Python', 'ython can be used on a server to create web applications.\r\nPython can be used alongside software to create workflows.\r\nPython can connect to database systems. It can also read and modify files.\r\nPython can be used to handle big data and perform complex mathematics.\r\nPython can be used for rapid prototyping, or for production-ready software development.PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994. PHP is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning PHP:\r\n\r\nPHP is a recursive acronym for \"PHP: Hypertext Preprocessor\".\r\nPHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.\r\nIt is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.\r\nPHP is a recursive acronym for \"PHP: Hypertext Preprocessor\".\r\nPHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.\r\nIt is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.', 'As mentioned before, HTML is one of the most widely used language over the web. Im going to list few of them here:\r\n\r\nCreate Web site - You can create a website or customize an existing web template if you know HTML well.\r\nBecome a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.\r\nUnderstand web - If you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(5, 'Java is a popular programming language, created in 1995.It is owned by Oracle, and more than 3 billion devices run Java.It is used for:Mobile applications (specially Android apps)\r\n\r\nDesktop applications\r\nWeb applications\r\nWeb servers and application servers\r\nGames\r\nAnd much, much more! Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)\r\nIt is one of the most popular programming language in the world\r\nIt is easy to learn and simple to use\r\nIt is open-source and free\r\nIt is secure, fast and powerful.\r\nIt is open-source and free\r\nIt has a huge community support (tens of millions of developers).\r\nava is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs\r\nAs Java is close to C++ and C#, it makes it easy for programmers to switch to Java or vice versa', 'JAVA', 'Javascript is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning Javascript: Javascript is the most popular programming language in the world and that makes it a programmer’s great choice. Once you learnt Javascript, it helps you developing great front-end as well as back-end softwares using different Javascript based frameworks like jQuery, Node.JS etc. Javascript is everywhere, it comes installed on every modern web browser and so to learn Javascript you really do not need any special environment setup. For example Chrome, Mozilla Firefox , Safari and every browser you know as of today, supports Javascript. Javascript helps you create really beautiful and crazy fast websites. You can develop your website with a console like look and feel and give your users the best Graphical User Experience. JavaScript usage has now extended to mobile app development, desktop app development, and game development. This opens many opportunities for you as Javascript Programmer. Due to high demand, there is tons of job growth and high pay for those who know JavaScript. You can navigate over to different job sites to see what having JavaScript skills looks like in the job market. Great thing about Javascript is that you will find tons of frameworks and Libraries already developed which can be used directly in your software development to reduce your time to market. There could be 1000s of good reasons to learn Javascript Programming. But one thing for sure, to learn any programming language, not only Javascript, you just need to code, and code and finally code until you become expert.', 'As mentioned before, Javascript is one of the most widely used programming languages (Front-end as well as Back-end). It has its presence in almost every area of software development. Im going to list few of them here:\r\n\r\nClient side validation - This is really important to verify any user input before submitting it to the server and Javascript plays an important role in validting those inputs at front-end itself.\r\nManipulating HTML Pages - Javascript helps in manipulating HTML page on the fly. This helps in adding and deleting any HTML tag very easily using javascript and modify your HTML to change its look and feel based on different devices and requirements.\r\nUser Notifications - You can use Javascript to raise dynamic pop-ups on the webpages to give different types of notifications to your website visitors.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.', 'For this Javascript tutorial, it is assumed that the reader have a prior knowledge of HTML coding. It would help if the reader had some prior exposure to object-oriented programming concepts and a general idea on creating online applications.'),
(6, 'Django is a Python framework that makes it easier to create web sites using Python.Django takes care of the difficult stuff so that you can concentrate on building your web applications. Django emphasizes reusability of components, also refereed to as DRY (Dont Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete). Django is especially helpful for database driven websites.', 'Django', 'Model - The data you want to present, usually data from a database.\r\nView - A request handler that returns the relevant template and content - based on the request from the user.\r\nTemplate - A text file (like an HTML file) containing the layout of the web page, with logic on how to display the data.Model\r\nThe model provides data from the database.In Django, the data is delivered as an Object Relational Mapping (ORM), which is a technique designed to make it easier to work with databases. The most common way to extract data from a database is SQL. One problem with SQL is that you have to have a pretty good understanding of the database structure to be able to work with it. Django, with ORM, makes it easier to communicate with the database, without having to write complex SQL statements. The models are usually located in a file called models.py. View\r\nA view is a function or method that takes http requests as arguments, imports the relevant model(s), and finds out what data to send to the template, and returns the final result. The views are usually located in a file called views.py.\r\n\r\nTemplate\r\nA template is a file where you describe how the result should be represented. Templates are often .html files, with HTML code describing the layout of a web page, but it can also be in other file formats to present other results, but we will concentrate on .html files. Django uses standard HTML to describe the layout, but uses Django tags to add logic:\r\n\r\nURLS\r\nDjango also provide a way to navigate around the different pages in a website. When a user requests a URL, Django decides which view it will send it to. This is done in a file called urls.py.When you have installed Django and created you first Django web application, and the browser requests the URL, this is basically what happens:\r\n\r\nDjango receives the URL, checks the urls.py file, and calls the view that matches the URL.\r\nThe view, located in views.py, checks for relevant models.\r\nThe models are imported from the models.py file.\r\nThe view then sends the data to a specified template in the template folder.\r\nThe template contains HTML and Django tags, and with the data it returns finished HTML content back to the browser.\r\nDjango can do a lot more than this, but this is basically what you will learn in this tutorial, and are the basic steps in a simple web application made with Django.', 'As mentioned before, HTML is one of the most widely used language over the web. Im going to list few of them here:\r\n\r\nCreate Web site - You can create a website or customize an existing web template if you know HTML well.\r\nBecome a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.\r\nUnderstand web - If you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.\r\n', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(7, 'C++ is a Python framework that makes it easier to create web sites using Python.Django takes care of the difficult stuff so that you can concentrate on building your web applications. Django emphasizes reusability of components, also refereed to as DRY (Dont Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete). Django is especially helpful for database driven websites.', 'C++', 'Model - The data you want to present, usually data from a database.\r\nView - A request handler that returns the relevant template and content - based on the request from the user.\r\nTemplate - A text file (like an HTML file) containing the layout of the web page, with logic on how to display the data.Model\r\nThe model provides data from the database.In Django, the data is delivered as an Object Relational Mapping (ORM), which is a technique designed to make it easier to work with databases. The most common way to extract data from a database is SQL. One problem with SQL is that you have to have a pretty good understanding of the database structure to be able to work with it. Django, with ORM, makes it easier to communicate with the database, without having to write complex SQL statements. The models are usually located in a file called models.py. View\r\nA view is a function or method that takes http requests as arguments, imports the relevant model(s), and finds out what data to send to the template, and returns the final result. The views are usually located in a file called views.py.\r\n\r\nTemplate\r\nA template is a file where you describe how the result should be represented. Templates are often .html files, with HTML code describing the layout of a web page, but it can also be in other file formats to present other results, but we will concentrate on .html files. Django uses standard HTML to describe the layout, but uses Django tags to add logic:\r\n\r\nURLS\r\nDjango also provide a way to navigate around the different pages in a website. When a user requests a URL, Django decides which view it will send it to. This is done in a file called urls.py.When you have installed Django and created you first Django web application, and the browser requests the URL, this is basically what happens:\r\n\r\nDjango receives the URL, checks the urls.py file, and calls the view that matches the URL.\r\nThe view, located in views.py, checks for relevant models.\r\nThe models are imported from the models.py file.\r\nThe view then sends the data to a specified template in the template folder.\r\nThe template contains HTML and Django tags, and with the data it returns finished HTML content back to the browser.\r\nDjango can do a lot more than this, but this is basically what you will learn in this tutorial, and are the basic steps in a simple web application made with Django.', 'As mentioned before, HTML is one of the most widely used language over the web. Im going to list few of them here:\r\n\r\nCreate Web site - You can create a website or customize an existing web template if you know HTML well.\r\nBecome a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.\r\nUnderstand web - If you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.\r\n', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(8, 'PHP is a Python framework that makes it easier to create web sites using Python.Django takes care of the difficult stuff so that you can concentrate on building your web applications. Django emphasizes reusability of components, also refereed to as DRY (Dont Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete). Django is especially helpful for database driven websites.', 'PHP', 'Model - The data you want to present, usually data from a database.\r\nView - A request handler that returns the relevant template and content - based on the request from the user.\r\nTemplate - A text file (like an HTML file) containing the layout of the web page, with logic on how to display the data.Model\r\nThe model provides data from the database.In Django, the data is delivered as an Object Relational Mapping (ORM), which is a technique designed to make it easier to work with databases. The most common way to extract data from a database is SQL. One problem with SQL is that you have to have a pretty good understanding of the database structure to be able to work with it. Django, with ORM, makes it easier to communicate with the database, without having to write complex SQL statements. The models are usually located in a file called models.py. View\r\nA view is a function or method that takes http requests as arguments, imports the relevant model(s), and finds out what data to send to the template, and returns the final result. The views are usually located in a file called views.py.\r\n\r\nTemplate\r\nA template is a file where you describe how the result should be represented. Templates are often .html files, with HTML code describing the layout of a web page, but it can also be in other file formats to present other results, but we will concentrate on .html files. Django uses standard HTML to describe the layout, but uses Django tags to add logic:\r\n\r\nURLS\r\nDjango also provide a way to navigate around the different pages in a website. When a user requests a URL, Django decides which view it will send it to. This is done in a file called urls.py.When you have installed Django and created you first Django web application, and the browser requests the URL, this is basically what happens:\r\n\r\nDjango receives the URL, checks the urls.py file, and calls the view that matches the URL.\r\nThe view, located in views.py, checks for relevant models.\r\nThe models are imported from the models.py file.\r\nThe view then sends the data to a specified template in the template folder.\r\nThe template contains HTML and Django tags, and with the data it returns finished HTML content back to the browser.\r\nDjango can do a lot more than this, but this is basically what you will learn in this tutorial, and are the basic steps in a simple web application made with Django.', 'As mentioned before, HTML is one of the most widely used language over the web. Im going to list few of them here:\r\n\r\nCreate Web site - You can create a website or customize an existing web template if you know HTML well.\r\nBecome a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.\r\nUnderstand web - If you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.\r\n', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(9, 'HTML is a Python framework that makes it easier to create web sites using Python.Django takes care of the difficult stuff so that you can concentrate on building your web applications. Django emphasizes reusability of components, also refereed to as DRY (Dont Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete). Django is especially helpful for database driven websites.', 'HTML', 'Model - The data you want to present, usually data from a database.\r\nView - A request handler that returns the relevant template and content - based on the request from the user.\r\nTemplate - A text file (like an HTML file) containing the layout of the web page, with logic on how to display the data.Model\r\nThe model provides data from the database.In Django, the data is delivered as an Object Relational Mapping (ORM), which is a technique designed to make it easier to work with databases. The most common way to extract data from a database is SQL. One problem with SQL is that you have to have a pretty good understanding of the database structure to be able to work with it. Django, with ORM, makes it easier to communicate with the database, without having to write complex SQL statements. The models are usually located in a file called models.py. View\r\nA view is a function or method that takes http requests as arguments, imports the relevant model(s), and finds out what data to send to the template, and returns the final result. The views are usually located in a file called views.py.\r\n\r\nTemplate\r\nA template is a file where you describe how the result should be represented. Templates are often .html files, with HTML code describing the layout of a web page, but it can also be in other file formats to present other results, but we will concentrate on .html files. Django uses standard HTML to describe the layout, but uses Django tags to add logic:\r\n\r\nURLS\r\nDjango also provide a way to navigate around the different pages in a website. When a user requests a URL, Django decides which view it will send it to. This is done in a file called urls.py.When you have installed Django and created you first Django web application, and the browser requests the URL, this is basically what happens:\r\n\r\nDjango receives the URL, checks the urls.py file, and calls the view that matches the URL.\r\nThe view, located in views.py, checks for relevant models.\r\nThe models are imported from the models.py file.\r\nThe view then sends the data to a specified template in the template folder.\r\nThe template contains HTML and Django tags, and with the data it returns finished HTML content back to the browser.\r\nDjango can do a lot more than this, but this is basically what you will learn in this tutorial, and are the basic steps in a simple web application made with Django.', 'As mentioned before, HTML is one of the most widely used language over the web. Im going to list few of them here:\r\n\r\nCreate Web site - You can create a website or customize an existing web template if you know HTML well.\r\nBecome a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.\r\nUnderstand web - If you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.\r\n', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.'),
(10, 'JavaScript is a Python framework that makes it easier to create web sites using Python.Django takes care of the difficult stuff so that you can concentrate on building your web applications. Django emphasizes reusability of components, also refereed to as DRY (Dont Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete). Django is especially helpful for database driven websites.', 'JavaScript', 'Model - The data you want to present, usually data from a database.\r\nView - A request handler that returns the relevant template and content - based on the request from the user.\r\nTemplate - A text file (like an HTML file) containing the layout of the web page, with logic on how to display the data.Model\r\nThe model provides data from the database.In Django, the data is delivered as an Object Relational Mapping (ORM), which is a technique designed to make it easier to work with databases. The most common way to extract data from a database is SQL. One problem with SQL is that you have to have a pretty good understanding of the database structure to be able to work with it. Django, with ORM, makes it easier to communicate with the database, without having to write complex SQL statements. The models are usually located in a file called models.py. View\r\nA view is a function or method that takes http requests as arguments, imports the relevant model(s), and finds out what data to send to the template, and returns the final result. The views are usually located in a file called views.py.\r\n\r\nTemplate\r\nA template is a file where you describe how the result should be represented. Templates are often .html files, with HTML code describing the layout of a web page, but it can also be in other file formats to present other results, but we will concentrate on .html files. Django uses standard HTML to describe the layout, but uses Django tags to add logic:\r\n\r\nURLS\r\nDjango also provide a way to navigate around the different pages in a website. When a user requests a URL, Django decides which view it will send it to. This is done in a file called urls.py.When you have installed Django and created you first Django web application, and the browser requests the URL, this is basically what happens:\r\n\r\nDjango receives the URL, checks the urls.py file, and calls the view that matches the URL.\r\nThe view, located in views.py, checks for relevant models.\r\nThe models are imported from the models.py file.\r\nThe view then sends the data to a specified template in the template folder.\r\nThe template contains HTML and Django tags, and with the data it returns finished HTML content back to the browser.\r\nDjango can do a lot more than this, but this is basically what you will learn in this tutorial, and are the basic steps in a simple web application made with Django.', 'As mentioned before, HTML is one of the most widely used language over the web. Im going to list few of them here:\r\n\r\nCreate Web site - You can create a website or customize an existing web template if you know HTML well.\r\nBecome a web designer - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.\r\nUnderstand web - If you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results.\r\nLearn other languages - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.\r\n', 'Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −\r\n\r\nExperience with any text editor like notepad, notepad++, or Edit plus etc.\r\nHow to create directories and files on your computer.\r\nHow to navigate through different directories.\r\nHow to type content in a file and save them on a computer.\r\nUnderstanding about images in different formats like JPEG, PNG format.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(1) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Message` text NOT NULL,
  `User_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Phone`, `Message`, `User_id`) VALUES
(1, 'Jaweria Aslam', 'madihakiran29@yahoo.com', '12345678910', 'joya', 1),
(2, 'Jaweria Aslam', 'ali@gmail.com', '12345678910', 'joy', 1),
(3, 'Jaweria Aslam', 'ali@gmail.com', '121212121', 'jou', 1),
(4, 'Jaweria Aslam', 'madihakiran29@yahoo.com', '12345678', 'joya', 1),
(5, 'Jaweria Aslam', 'joyaaslam127@gmail.com', '123', 'qwe', 1),
(6, 'Jaweria Aslam', 'joyaaslam127@gmail.com', '12345678910', '12as', 1),
(7, 'Jaweria Aslam', 'joyaaslam127@gmail.com', '12345678910', '13245', 1);

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `Id` int(11) NOT NULL,
  `Topic` text NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(1) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Email`, `Password`) VALUES
(69, 'joyajoya@gmail.com', '202cb962ac59075b964b07152d234b70'),
(73, 'me@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `Id` int(10) NOT NULL,
  `Heading` text NOT NULL,
  `Topic` text NOT NULL,
  `Topic_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`Id`, `Heading`, `Topic`, `Topic_description`) VALUES
(1, 'Python', 'Python is a general-purpose, versatile and popular programming language. Python is also a great first language because it is concise and easy to read. A good language to have in any programmer’s stack, Python can be used for everything from web development to software development and data science applications.', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(2, 'BOOTSTRAP', 'Software engineers use Bootstrap for a number of different reasons. It is easy to set up and master, it has a lot of components, a good grid system, styling for many HTML elements ranging from typography to buttons, as well as support of JavaScript plugins, making it even more flexible.', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(3, 'JAVASRCIPT ', 'Aside from the unlimited possibilities, there are many reasons for web developers to use JavaScript over other programming languages: JavaScript is the only programming language native to the web browser. JavaScript is the most popular language', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(4, 'JAVA', 'Aside from the unlimited possibilities, there are many reasons for web developers to use JavaScript over other programming languages: JavaScript is the only programming language native to the web browser. JavaScript is the most popular language', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(5, 'C#', 'C# is a programming language that is remarkably scalable and easy to maintain. Because of the strict nature of how static codes must be written, C# programs are reliably consistent, which makes them much easier to adjust and maintain than programs that are written using other languages.', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(6, 'PHP', 'Its versatile: One of the major benefits of PHP is that it is platform independent, meaning it can be used on Mac OS, Windows, Linux and supports most web browsers. It also supports all the major web servers, making it easy to deploy on different systems and platforms at minimal additional cost.', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(7, 'HTML', 'HTML code ensures the proper formatting of text and images for your Internet browser. Without HTML, a browser would not know how to display text as elements or load images or other elements. HTML also provides a basic structure of the page, upon which Cascading Style Sheets are overlaid to change its appearance.0', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(8, 'CSS', 'CSS makes the front-end of a website shine and it creates a great user experience. Without CSS, websites would be less pleasing to the eye and likely much harder to navigate. In addition to layout and format, CSS is responsible for font color and more.', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(9, 'CSS', 'C++ allows you to have a lot of control as to how you use computer resources, so in the right hands, its speed and ability to cheaply use resources should be able to surpass other languages. Thanks to C++s performance, it is often used to develop game engines, games, and desktop apps', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write'),
(10, 'Django', 'Django is a high-level Python web framework that enables rapid development of secure and maintainable websites. Built by experienced developers, Django takes care of much of the hassle of web development, so you can focus on writing your app without needing to reinvent the wheel', 'This course is a great introduction to both fundamental programming concepts and the Python programming language. Python 3 is the most up-to-date version of the language with many improvements made to increase the efficiency and simplicity of the Python code that you write');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `Id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Id`, `C_id`, `Link`) VALUES
(1, 1, 'https://www.youtube.com/embed/kqtD5dpn9C8'),
(2, 1, 'https://www.youtube.com/embed/2IsF7DEtVjg'),
(3, 1, 'https://www.youtube.com/embed/Eaz5e6M8tL4'),
(4, 1, 'https://www.youtube.com/embed/6a39OjkCN5I'),
(5, 1, 'https://www.youtube.com/embed/tw7ror9x32s'),
(6, 1, 'https://www.youtube.com/embed/vmEHCJofslg'),
(10, 2, 'https://www.youtube.com/embed/-qfEOE4vtxE'),
(11, 2, 'https://www.youtube.com/embed/wkSA9bfCmKU'),
(12, 2, 'https://www.youtube.com/embed/wkSA9bfCmKU'),
(18, 1, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(19, 1, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(20, 1, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(21, 1, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(22, 2, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(23, 2, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(24, 2, 'https://www.youtube.com/embed/Qb8DLdSYBAo'),
(25, 2, 'https://www.youtube.com/embed/v0IgI8vYD_o'),
(26, 2, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(28, 2, 'https://www.youtube.com/embed/_uQrJ0TkZlc'),
(29, 2, 'https://www.youtube.com/embed/wkSA9bfCmKU'),
(30, 3, 'https://www.youtube.com/embed/W6NZfCO5SIk'),
(31, 3, 'https://www.youtube.com/embed/jS4aFq5-91M'),
(32, 3, 'https://www.youtube.com/embed/hdI2bqOjy3c'),
(33, 3, 'https://www.youtube.com/embed/W6NZfCO5SIk'),
(34, 3, 'https://www.youtube.com/embed/hdI2bqOjy3c'),
(35, 3, 'https://www.youtube.com/embed/W6NZfCO5SIk'),
(36, 3, 'https://www.youtube.com/embed/mCQ1-iDSnto'),
(37, 3, 'https://www.youtube.com/embed/mCQ1-iDSnto'),
(38, 3, 'https://www.youtube.com/embed/W6NZfCO5SIk'),
(39, 3, 'https://www.youtube.com/embed/jS4aFq5-91M'),
(40, 4, 'https://www.youtube.com/embed/eIrMbAQSU34'),
(41, 3, 'https://www.youtube.com/embed/grEKMHGYyns'),
(42, 3, 'https://www.youtube.com/embed/RRubcjpTkks'),
(43, 3, 'https://www.youtube.com/embed/grEKMHGYyns'),
(44, 3, 'https://www.youtube.com/embed/eIrMbAQSU34'),
(45, 3, 'https://www.youtube.com/embed/RRubcjpTkks'),
(46, 3, 'https://www.youtube.com/embed/yRpLlJmRo2w'),
(47, 3, 'https://www.youtube.com/embed/grEKMHGYyns'),
(48, 3, 'https://www.youtube.com/embed/W6NZfCO5SIk'),
(49, 3, 'https://www.youtube.com/embed/eIrMbAQSU34'),
(50, 4, 'https://www.youtube.com/embed/eIrMbAQSU34'),
(51, 4, 'https://www.youtube.com/embed/grEKMHGYyns'),
(52, 4, 'https://www.youtube.com/embed/RRubcjpTkks'),
(53, 4, 'https://www.youtube.com/embed/grEKMHGYyns'),
(54, 4, 'https://www.youtube.com/embed/eIrMbAQSU34'),
(55, 4, 'https://www.youtube.com/embed/RRubcjpTkks'),
(56, 4, 'https://www.youtube.com/embed/yRpLlJmRo2w'),
(57, 4, 'https://www.youtube.com/embed/grEKMHGYyns'),
(58, 4, 'https://www.youtube.com/embed/W6NZfCO5SIk'),
(59, 4, 'https://www.youtube.com/embed/eIrMbAQSU34'),
(60, 5, 'https://www.youtube.com/embed/gfkTfcpWqAY'),
(61, 5, 'https://www.youtube.com/embed/GhQdlIFylQ8'),
(62, 5, 'https://www.youtube.com/embed/wkSA9bfCmKU'),
(63, 5, 'https://www.youtube.com/embed/GhQdlIFylQ8'),
(64, 5, 'https://www.youtube.com/embed/0QUgvfuKvWU'),
(65, 5, 'https://www.youtube.com/embed/gfkTfcpWqAY'),
(66, 5, 'https://www.youtube.com/embed/0QUgvfuKvWU'),
(67, 5, 'https://www.youtube.com/embed/0QUgvfuKvWU'),
(68, 5, 'https://www.youtube.com/embed/GhQdlIFylQ8'),
(69, 5, 'https://www.youtube.com/embed/gfkTfcpWqAY'),
(70, 6, 'https://www.youtube.com/embed/OK_JCtrrv-c'),
(71, 6, 'https://www.youtube.com/embed/Hqd8dZrw5bg'),
(72, 6, 'https://www.youtube.com/embed/2eebptXfEvw'),
(73, 6, 'https://www.youtube.com/embed/Hqd8dZrw5bg'),
(74, 6, 'https://www.youtube.com/embed/OK_JCtrrv-c'),
(75, 6, 'https://www.youtube.com/embed/Hqd8dZrw5bg'),
(76, 6, 'https://www.youtube.com/embed/OK_JCtrrv-c'),
(77, 6, 'https://www.youtube.com/embed/2eebptXfEvw'),
(78, 6, 'https://www.youtube.com/embed/Hqd8dZrw5bg'),
(79, 6, 'https://www.youtube.com/embed/OK_JCtrrv-c'),
(80, 7, 'https://www.youtube.com/embed/qz0aGYrrlhU'),
(81, 7, 'https://www.youtube.com/embed/-USAeFpVf_A'),
(82, 7, 'https://www.youtube.com/embed/qz0aGYrrlhU'),
(83, 7, 'https://www.youtube.com/embed/G3e-cpL7ofc'),
(84, 7, 'https://www.youtube.com/embed/qz0aGYrrlhU'),
(85, 7, 'https://www.youtube.com/embed/-USAeFpVf_A'),
(86, 7, 'https://www.youtube.com/embed/qz0aGYrrlhU'),
(87, 7, 'https://www.youtube.com/embed/G3e-cpL7ofc'),
(88, 7, 'https://www.youtube.com/embed/G3e-cpL7ofc'),
(89, 7, 'https://www.youtube.com/embed/qz0aGYrrlhU'),
(90, 8, 'https://www.youtube.com/embed/yfoY53QXEnI'),
(91, 8, 'https://www.youtube.com/embed/1Rs2ND1ryYc'),
(92, 8, 'https://www.youtube.com/embed/WyxzAU3p8CE'),
(93, 8, 'https://www.youtube.com/embed/1Rs2ND1ryYc'),
(94, 8, 'https://www.youtube.com/embed/WyxzAU3p8CE'),
(95, 8, 'https://www.youtube.com/embed/yfoY53QXEnI'),
(96, 8, 'https://www.youtube.com/embed/1Rs2ND1ryYc'),
(97, 8, 'https://www.youtube.com/embed/3T4BsrBISnI'),
(98, 8, 'https://www.youtube.com/embed/WyxzAU3p8CE'),
(99, 8, 'https://www.youtube.com/embed/yfoY53QXEnI'),
(100, 9, 'https://www.youtube.com/embed/vLnPwxZdW4Y'),
(101, 9, 'https://www.youtube.com/embed/McojvctVsUs'),
(102, 9, 'https://www.youtube.com/embed/vLnPwxZdW4Y'),
(103, 9, 'https://www.youtube.com/embed/GQp1zzTwrIg'),
(104, 9, 'https://www.youtube.com/embed/McojvctVsUs'),
(105, 9, 'https://www.youtube.com/embed/vLnPwxZdW4Y'),
(106, 9, 'https://www.youtube.com/embed/vLnPwxZdW4Y'),
(107, 9, 'https://www.youtube.com/embed/McojvctVsUs'),
(108, 9, 'https://www.youtube.com/embed/GQp1zzTwrIg'),
(109, 9, 'https://www.youtube.com/embed/vLnPwxZdW4Y'),
(110, 10, 'https://www.youtube.com/embed/OTmQOjsl0eg'),
(111, 10, 'https://www.youtube.com/embed/F5mRW0jo-U4'),
(112, 10, 'https://www.youtube.com/embed/vLnPwxZdW4Y'),
(113, 10, 'https://www.youtube.com/embed/rHux0gMZ3Eg'),
(114, 10, 'https://www.youtube.com/embed/OTmQOjsl0eg'),
(115, 10, 'https://www.youtube.com/embed/F5mRW0jo-U4'),
(116, 10, 'https://www.youtube.com/embed/OTmQOjsl0eg'),
(117, 10, 'https://www.youtube.com/embed/vLnPwxZdW4Y'),
(118, 10, 'https://www.youtube.com/embed/OTmQOjsl0eg'),
(119, 10, 'https://www.youtube.com/embed/F5mRW0jo-U4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`) USING HASH;

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `C_id` (`C_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `favourite_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `login` (`Id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `tutorials` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
