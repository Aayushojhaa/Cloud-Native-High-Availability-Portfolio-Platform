# Architecture Design

This project is built on a cloud-native, highly available AWS architecture following industry best practices.

The infrastructure is designed to be modular, secure, and scalable, allowing the application to handle increasing traffic without downtime.

Incoming traffic is first handled by Amazon Route 53, which resolves DNS requests and performs health checks.  
Traffic is then routed through Amazon CloudFront, which acts as a global content delivery network (CDN), reducing latency and protecting the origin infrastructure.

The origin for CloudFront is an Application Load Balancer deployed in public subnets.  
The ALB distributes traffic across EC2 instances running in private subnets and managed by an Auto Scaling Group.

Backend services such as Amazon RDS (MySQL) and Redis (ElastiCache) are isolated inside private subnets and are never exposed directly to the internet.
