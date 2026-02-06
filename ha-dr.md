# High Availability & Disaster Recovery

High availability is achieved using multiple AWS services working together.

## High Availability
- EC2 Auto Scaling Group spans multiple Availability Zones
- Application Load Balancer distributes traffic evenly
- Auto Scaling replaces unhealthy instances automatically

## Disaster Recovery
A multi-region strategy is implemented:

- Primary Region: Mumbai (ap-south-1)
- DR Region: US-East-1 (N. Virginia)

Amazon Route 53 health checks continuously monitor the application endpoint.  
If the primary region becomes unavailable, Route 53 automatically routes traffic to the DR region.

This setup ensures business continuity with minimal downtime.
