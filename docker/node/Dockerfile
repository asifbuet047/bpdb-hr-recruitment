# docker/node/Dockerfile
FROM node:22-alpine

WORKDIR /app

# Enable pnpm
RUN corepack enable && corepack prepare pnpm@latest --activate

# Keep it simple: no COPY (you use volume)

CMD ["sh", "-c", "pnpm install && pnpm build"]