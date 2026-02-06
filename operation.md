# Operations & Management

## IAM
IAM roles and policies are used to provide EC2 instances with secure, least-privilege access to AWS services.

## AWS Systems Manager (SSM)
SSM is used for secure instance access without SSH keys or public IPs.
This improves security and simplifies instance management.

## AMI & Launch Templates
A custom AMI is created after configuring the application environment.
Launch Templates are used to standardize EC2 instance provisioning inside Auto Scaling Groups.

## Monitoring
- ALB health checks
- EC2 Auto Scaling health monitoring
- Route 53 health checks for failover

This ensures the system remains operational and self-healing.
