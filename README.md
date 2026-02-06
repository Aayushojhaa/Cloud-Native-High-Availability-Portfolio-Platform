# Cloud-Native High Availability Portfolio Platform (AWS)

## Project Overview
This project represents a **real-world, production-grade cloud-native web platform** designed and deployed on AWS.  
The goal of this project is not just to host a portfolio website, but to demonstrate **enterprise-level AWS architecture**, focusing on **high availability, scalability, security, performance optimization, and disaster recovery**.

The application layer is a dynamic portfolio website with a contact form. User-submitted data is securely processed and stored in a managed database, while the backend infrastructure follows AWS best practices used in professional cloud environments.

This project was built end-to-end manually to gain deep hands-on experience with AWS core services.

---

## High-Level Architecture Flow

Users  
↓  
Amazon Route 53 (DNS + Health Checks)  
↓  
Amazon CloudFront (Global CDN & Edge Caching)  
↓  
Application Load Balancer (Public Subnets)  
↓  
EC2 Auto Scaling Group (Private Subnets)  
↓  
Amazon RDS (MySQL Database)  
↓  
Redis (ElastiCache – In-memory Cache)

---

## Deployment Regions
- **Primary Region:** Mumbai (ap-south-1)
- **Disaster Recovery Region:** US-East-1 (N. Virginia)

---

## Key Objectives of This Project
- Design a secure AWS VPC-based architecture
- Implement high availability using Auto Scaling and ALB
- Achieve multi-region disaster recovery using Route 53
- Improve application performance using Redis caching
- Secure backend resources using private networking and IAM
- Deliver content globally using CloudFront CDN

---

## AWS Services Used
- Amazon VPC
- Internet Gateway & NAT Gateway
- Public & Private Subnets
- Route Tables
- IAM Roles & Policies
- EC2 Instances
- EC2 AMI & Launch Templates
- EC2 Auto Scaling Group
- Application Load Balancer (ALB)
- Amazon RDS (MySQL)
- Amazon ElastiCache (Redis)
- Amazon CloudFront
- Amazon Route 53
- AWS Systems Manager (SSM)
- Linux (Amazon Linux)
- PHP, HTML, CSS, JavaScript

---

## Application Overview
The portfolio website allows visitors to submit their contact details (name, email, message).  
The backend PHP application validates and stores this data in Amazon RDS.

Redis is integrated as a caching layer to reduce repeated database queries and improve response time, especially under high traffic.

This setup closely mirrors how modern cloud applications are built in enterprise environments.
