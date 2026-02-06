# Networking Design

## Virtual Private Cloud (VPC)
A dedicated Amazon VPC is created to isolate all application resources from other AWS workloads.  
This provides complete control over IP addressing, routing, and network security.

## Subnets
The VPC is divided into multiple subnets across different Availability Zones:

### Public Subnets
- Application Load Balancer
- NAT Gateway

### Private Subnets
- EC2 application servers
- Amazon RDS
- Redis (ElastiCache)

## Route Tables
Two separate route tables are used:

### Public Route Table
- Routes internet-bound traffic via Internet Gateway
- Associated with public subnets

### Private Route Table
- Routes outbound traffic via NAT Gateway
- Associated with private subnets

## NAT Gateway
The NAT Gateway allows EC2 instances in private subnets to:
- Download updates
- Install packages
- Access AWS services

without being directly exposed to the internet.

This design ensures strong security while maintaining necessary outbound connectivity.
