<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

🐋

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Glaucius personal website</h3>

  <p align="center">
    Just a simple website, deployed using the most modern technics and using only cloud native solutions. 

  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

A few days ago, I decided to update my resume, which is my personal webpage. It was already running on a Docker container, but, not fully automated, so I also grab the opportunity to put some intelligence and a DevOps approach on my resume. 

Here's why:
* Use the concept of single source of truth, and centralize the data in a git repositorie, in this case, my personal Github account.
* Create a Docker Image with my personal website and publish it
* Deliver new updates allways over a pipeline, with all trigers managed by a Git repositorie.
* And also, have some fun and share the code !!!!

It`s all based on free software, so, you can use my code freelly. Be my guess !!!!


### Built With

This is the full stack of solutions and pieces.
* [Github](https://github.com)
* [Docker Ecosystem](https://docker.com)
* [Linux](https://kernel.org)
* [Apache](https://apache.org)




<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
* Docker (install docker on your host or server)

### Installation

1. Install [Docker](https://docs.docker.com/get-docker/)
2. Clone the repo
   ```sh
   git clone https://github.com/glaucius/web.git
   ```
3. Configure your application and your Dockerfile, according to your needs
   ```sh
   nano Dockerfile
   ```
3. Update the code of my cv according to your history
   ```sh
   nano index.html
   ```
   Dont forget to change the images on assets/images folder.

4. Build your own image
   ```JS
   docker build -t my-image:v1 .
   ```



<!-- USAGE EXAMPLES -->
## Usage

How to start your own image on a container
   ```JS
   docker run -p 8080:80 my-image:v1 --name my-image-container-name
   ```

_To run it like a daemon put -d before -p option._

   ```JS
   docker run --d -p 8080:80 my-image:v1 --name my-image-container-name
   ```




<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contact

Glaucius Pereira - [@glauciusjunior](https://twitter.com/glauciusjunior) - glaucius@gmail.com

Project Link: [https://github.com/glaucius/web](https://github.com/glaucius/web)








<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
